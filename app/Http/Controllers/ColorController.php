<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class ColorController extends Controller
{
    public function index($id = null)
    {

        $id ? $color = Color::find($id) : $colors = Color::all();
        if ($id) {
            return $this->respondWithSuccess("data", $color);
        } else {
            return view('color.index', compact('colors'));
        }
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => '',
        ]);

        // #574343

        if ($validator->fails()) {
            Session::flash('message', $validator->errors()->first());
            Session::flash('class', 'danger');
            return redirect()->back();
        }

        $color = new Color();

        if ($request->name) {
            $color->name = $request->name;
        } else {
            $color->name = 'Not Set';
        }

        if ($request->code) {
            $length = strlen($request->code);
            if ($length != 6) {
                Session::flash('message', "Color code must be 6 digits");
                Session::flash('class', 'danger');
                return redirect()->back();
            }
            $color->code = "#" . $request->code;
        }
        $color->save();
        Session::flash('message', 'Color created successfully.');
        Session::flash('class', 'success');
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => '',
            'code' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondWithError($validator->errors()->first());
        }

        $color = Color::find($id);
        $color->update($request->all());

        return $this->respondWithSuccess("data", $color);
    }

    public function delete($id)
    {
        $color = Color::find($id);
        $color->delete();
        return $this->respondWithSuccess("data", $color);
    }
}
