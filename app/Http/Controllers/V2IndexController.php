<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class V2IndexController extends Controller
{
    public function index()
    {
        return view('v2/index');
    }

}
