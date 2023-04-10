<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Service_Details;
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
    public function store_details(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'service_name_item' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('message', $validator->errors()->first());
            Session::flash('class', 'danger');
            return redirect()->back();
        }

        $service_details = new Service_Details();

        $service_details->title = $request->title;
        $service_details->service_id = $request->service_id;
        
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/images/service_details'), $imageName);
            $imageName = '/storage/images/service_details/' . $imageName;
            $service_details->image = $imageName;
        }

        if ($request->service_name_item) {
            $service_details->service_name_item  = $request->service_name_item;
        }
        if ($request->description) {
            $service_details->info = $request->description;
        }
        $service_details->save();
        return redirect()->back()->with('success', 'Service created successfully.');
    }


    public function detailsView($id)
    {
        $service = Service::find($id);
        $serviceDetails = Service_Details::where('service_id', $id)->get();
        $serviceItems = ['land','house','flats'];
        return view('service.details', compact('service', 'serviceDetails','serviceItems'));
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



    // public

    public function view($serviceName = null, $serviceItemName = null)
    {
        $service = Service::where('title', $serviceName)->first();
        $serviceDetails = Service_Details::where('service_id', $service->id)
                        ->where('service_name_item', 'like', '%' . $serviceItemName . '%')
                        ->get();
        return view('public.service_details', compact('serviceName', 'serviceItemName', 'serviceDetails'));
    }
}
