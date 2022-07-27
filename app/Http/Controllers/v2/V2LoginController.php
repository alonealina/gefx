<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2LoginController extends Controller
{
    public function login()
    {
        return view('v2/login');
    }

    public function login2()
    {
        return view('v2/login2');
    }

    public function login_function(Request $request)
    {
        $request;
        exit;
    }

    public function logout(Request $request)
    {
        $request;
        exit;
    }

}
