<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyAndPolicyController extends Controller
{
    public function index()
    {
        return view('public.privacy_policy');
    }
}
