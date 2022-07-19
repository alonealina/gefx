<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2NewAcountController extends Controller
{
    public function new_acount(Request $request)
    {
        $ref = $request->ref;
        return view('v2/new_acount', ['ref' => $ref]);
    }

    public function indi_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/new_acount_complete');
    }

    public function corp_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/new_acount_complete');
    }

    public function new_acount_complete()
    {
        return view('v2/new_acount_complete');
    }

}
