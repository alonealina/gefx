<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\User;

class V2UserController extends Controller
{
    public function summary()
    {
        return view('v2/summary')->with(User::outputDetail());
    }

    public function history()
    {
        return view('v2/history')->with(User::outputDetail());
    }

    public function setting()
    {
        return view('v2/setting')->with(User::outputDetail());
    }

    public function setting2()
    {
        return view('v2/setting2')->with(User::outputDetail());
    }

}
