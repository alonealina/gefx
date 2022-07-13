<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2AddAcountController extends Controller
{
    public function add_acount()
    {
        return view('v2/add_acount');
    }

    public function add_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/add_acount_complete');
    }

    public function add_acount_complete()
    {
        return view('v2/add_acount_complete');
    }

}
