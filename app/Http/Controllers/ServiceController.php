<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function storeOrUpdate(Request $request)
    {

        if ($request->service_id) {
            $service = Service::find($request->service_id);
            if ($request->image) {
                $oldImage = public_path($service->image);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }
        } else {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            if ($validator->fails()) {
                Session::flash('message', $validator->errors()->first());
                Session::flash('class', 'danger');
                return redirect()->back();
            }
            $service = new Service();
        }

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/images/service'), $imageName);
            $imageName = '/storage/images/service/' . $imageName;
            $service->image = $imageName;
        }

        if ($request->title) {
            $service->title = $request->title;
        }
        if ($request->description) {
            $service->description = $request->description;
        }
        $service->save();
        return redirect()->route('user.service.index')->with('success', 'Service created successfully.');
    }



    public function delete($id)
    {
        $service = Service::find($id);
        $oldImage = public_path($service->image);
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }
        $service->delete();
        return $this->respondWithSuccess('Service deleted successfully.');
    }
}
