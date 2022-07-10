<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class V2FaqController extends Controller
{
    public function faq()
    {
        return view('v2/faq');
    }

}
