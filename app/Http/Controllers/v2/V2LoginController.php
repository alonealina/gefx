<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2LoginController extends Controller
{
    public function login()
    {
        return view('v2/login');
    }

    public function login2()
    {
        return view('v2/login2');
    }

    public function login_function(Request $request)
    {
        session(['login_id' => 1]);
        return redirect('v2/summary'); 
    }

    public function logout(Request $request)
    {
        session()->forget('login_id');
        return redirect('v2/login'); 
    }

}
