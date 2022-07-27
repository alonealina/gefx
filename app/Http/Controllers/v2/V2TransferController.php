<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\User;

class V2TransferController extends Controller
{
    public function transfer()
    {
        return view('v2/transfer')->with(User::outputDetail());
    }

    public function transfer_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/transfer_complete')->with(User::outputDetail());
    }

    public function transfer_complete()
    {
        return view('v2/transfer_complete')->with(User::outputDetail());
    }


}
