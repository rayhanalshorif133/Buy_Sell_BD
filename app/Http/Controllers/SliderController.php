<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();

        return view('slider.index', compact('sliders'));
    }

    public function storeOrUpdate(Request $request)
    {

        if ($request->slider_id) {
            $slider = Slider::find($request->slider_id);
            if ($request->image) {
                // delete old image
                $oldImage = public_path($slider->image);
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
            $slider = new Slider();
        }

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images/slider'), $imageName);
        $imageName = '/storage/images/slider/' . $imageName;

        if ($request->title) {
            $slider->title = $request->title;
        }
        if ($request->description) {
            $slider->description = $request->description;
        }
        $slider->image = $imageName;
        $slider->save();
        Session::flash('message', 'Slider created successfully.');
        Session::flash('class', 'success');
        return redirect()->route('user.slider.index');
    }

    public function delete($id)
    {
        $slider = Slider::find($id);
        $oldImage = public_path($slider->image);
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }
        $slider->delete();
        return $this->respondWithSuccess('Slider deleted successfully.');
    }

    public function multiActions(Request $request){
        return $this->respondWithSuccess("Success", $request->all());
    }
}
