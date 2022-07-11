<?php

namespace App\Http\Controllers;

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
}
