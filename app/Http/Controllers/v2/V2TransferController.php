<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2TransferController extends Controller
{
    public function transfer()
    {
        return view('v2/transfer');
    }

    public function transfer_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/transfer_complete');
    }

    public function transfer_complete()
    {
        return view('v2/transfer_complete');
    }


}
