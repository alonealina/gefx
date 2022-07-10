<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class V2NewAcountController extends Controller
{
    public function new_acount()
    {
        return view('v2/new_acount');
    }
}
