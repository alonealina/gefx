<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\User;

class V2AddAcountController extends Controller
{
    public function add_acount()
    {
        return view('v2/add_acount')->with(User::outputDetail());
    }

    public function add_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/add_acount_complete')->with(User::outputDetail());
    }

    public function add_acount_complete()
    {
        return view('v2/add_acount_complete')->with(User::outputDetail());
    }

}
