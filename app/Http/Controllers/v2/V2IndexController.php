<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2IndexController extends Controller
{
    public function index()
    {
        return view('v2/index');
    }

}
