<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CookieController extends Controller
{
    public function setCookie(Request $request)
    {
        $response = new Response('SET COOKIE');
        $response->withCookie(cookie($request->name, $request->color, 45000));
        return $response;
    }
    public function getCookie(Request $request)
    {
        $value = $request->cookie($request->name);
        return $value;
    }
}
