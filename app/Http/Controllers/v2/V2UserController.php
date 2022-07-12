<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2UserController extends Controller
{
    public function summary()
    {
        return view('v2/summary');
    }

    public function history()
    {
        return view('v2/history');
    }

    public function deposit()
    {
        return view('v2/deposit');
    }

    public function transfer()
    {
        return view('v2/transfer');
    }

    public function add_acount()
    {
        return view('v2/add_acount');
    }

    public function setting()
    {
        return view('v2/setting');
    }

    public function setting2()
    {
        return view('v2/setting2');
    }

}
