<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2FaqController extends Controller
{
    public function faq()
    {
        return view('v2/faq');
    }

}
