<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2NewAcountController extends Controller
{
    public function new_acount()
    {
        return view('v2/new_acount');
    }

    public function indi_confirm(Request $request)
    {
        $request;
    }
}