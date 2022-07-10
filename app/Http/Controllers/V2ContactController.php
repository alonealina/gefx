<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class V2ContactController extends Controller
{
    public function contact()
    {
        return view('v2/contact');
    }
}
