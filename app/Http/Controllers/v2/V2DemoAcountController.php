<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2DemoAcountController extends Controller
{
    public function demo_acount()
    {
        return view('v2/demo_acount');
    }

    public function demo_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/demo_acount_complete');
    }

    public function demo_acount_complete()
    {
        return view('v2/demo_acount_complete');
    }

}
