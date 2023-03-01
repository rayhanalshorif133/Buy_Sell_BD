<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        if (!$about) {
            $about = new About();
            $about->description = 'No description';
            $about->image = 'images/no-image.jpg';
            $about->save();
        }
        return view('about.index', compact('about'));
    }

    public function storeOrUpdate(Request $request)
    {


        $about = About::first();
        if (!$about) {
            $validator = Validator::make($request->all(), [
                'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            if ($validator->fails()) {
                Session::flash('message', $validator->errors()->first());
                Session::flash('class', 'danger');
                return redirect()->back();
            }
            $about = new About();
        } else {
            if ($request->image) {
                if ($about->image != 'images/no-image.jpg') {
                    $oldImage = public_path($about->image);
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
            }
        }
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/images/about'), $imageName);
            $imageName = '/storage/images/about/' . $imageName;
            $about->image = $imageName;
        }

        if ($request->description) {
            $about->description = $request->description;
        }
        $about->save();
        Session::flash('success', 'About us updated successfully');
        Session::flash('class', 'success');
        return redirect()->back();
    }
}
