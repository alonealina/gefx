<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2DemoAcountController extends Controller
{
    public function demo_acount()
    {
        return view('v2/demo_acount');
    }
}
