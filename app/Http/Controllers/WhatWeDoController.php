<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhatWeDo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class WhatWeDoController extends Controller
{
    public function index($id = null)
    {
        if($id == null){
            $whatWedos = WhatWeDo::all();
        }else{
            $whatWedo = WhatWeDo::find($id);
            return $this->respondWithSuccess("Data",$whatWedo);
        }
        return view('what_we_do.index', compact('whatWedos'));
    }


    public function storeOrUpdate(Request $request)
    {

        if ($request->service_id) {
            $service = WhatWeDo::find($request->service_id);
            if ($request->image) {
                $oldImage = public_path($service->image);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }
        } else {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            if ($validator->fails()) {
                Session::flash('message', $validator->errors()->first());
                Session::flash('class', 'danger');
                return redirect()->back();
            }
            $service = new WhatWeDo();
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
        return redirect()->route('user.what-we-do.index')->with('success', 'Service created successfully.');
    }
}
