<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\V2\BFF;

class V2TransferController extends Controller
{
    public function transfer(Request $request)
    {
        return view('v2/transfer')->with(BFF::outputDetail($request));
    }

    public function transfer_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/transfer_complete')->with(BFF::outputDetail($request));
    }

    public function transfer_complete(Request $request)
    {
        return view('v2/transfer_complete')->with(BFF::outputDetail($request));
    }
}
