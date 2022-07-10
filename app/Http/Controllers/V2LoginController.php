<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class V2LoginController extends Controller
{
    public function login()
    {
        return view('v2/login');
    }
}
