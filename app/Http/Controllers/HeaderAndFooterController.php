<?php

namespace App\Http\Controllers;

use App\Models\HeaderAndFooter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HeaderAndFooterController extends Controller
{
    public function index()
    {
        $headerAndFooter = HeaderAndFooter::first();
        return view('header_footer.index', compact('headerAndFooter'));
    }

    public function storeOrUpdate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|max:50|min:5',
            'phone' => 'required|string|max:50|min:5',
            'footer_title' => 'required|string|max:255|min:5',
            'site_logo' => 'required',
        ]);

        if ($validator->fails()) {
            Session::flash('message', $validator->errors()->first());
            Session::flash('class', 'danger');
            return redirect()->back();
        }
        $headerAndFooter = HeaderAndFooter::first();
        if ($headerAndFooter) {
            if ($request->favicon) {
                // delete old image
                $oldImage = public_path($headerAndFooter->favicon);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
                $imageNameFavicon = time() . '.' . $request->favicon->extension();
                $request->favicon->move(public_path('storage/images/favicon'), $imageNameFavicon);
                $imageNameFavicon = '/storage/images/favicon/' . $imageNameFavicon;
            } else {
                $imageNameFavicon = $headerAndFooter->favicon;
            }


            if ($request->site_logo) {
                // delete old image
                $oldImage = public_path($headerAndFooter->site_logo);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
                $imageNameSiteLogo = time() . '.' . $request->site_logo->extension();
                $request->site_logo->move(public_path('storage/images/site_logo'), $imageNameSiteLogo);
                $imageNameSiteLogo = '/storage/images/site_logo/' . $imageNameSiteLogo;
            } else {
                $imageNameSiteLogo = $headerAndFooter->site_logo;
            }


            $headerAndFooter->update([
                'site_logo' => $imageNameSiteLogo,
                'favicon' => $imageNameFavicon,
                'email' => $request->email,
                'phone' => $request->phone,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'footer_title' => $request->footer_title,
            ]);
        } else {

            $imageNameFavicon = null;
            if ($request->favicon) {
                $imageNameFavicon = time() . '.' . $request->favicon->extension();
                $request->favicon->move(public_path('storage/images/favicon'), $imageNameFavicon);
                $imageNameFavicon = '/storage/images/favicon/' . $imageNameFavicon;
            }
            if ($request->site_logo) {
                $imageNameSiteLogo = time() . '.' . $request->site_logo->extension();
                $request->site_logo->move(public_path('storage/images/site_logo'), $imageNameSiteLogo);
                $imageNameSiteLogo = '/storage/images/site_logo/' . $imageNameSiteLogo;
            }
            HeaderAndFooter::create([
                'site_logo' => $imageNameSiteLogo,
                'favicon' => $imageNameFavicon,
                'email' => $request->email,
                'phone' => $request->phone,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'footer_title' => $request->footer_title,
            ]);
        }


        Session::flash('success', 'Header and footer updated successfully');
        Session::flash('class', 'success');
        return redirect()->back();
    }
}
