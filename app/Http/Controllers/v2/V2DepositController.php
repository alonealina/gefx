<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\V2\BFF;

class V2DepositController extends Controller
{
    public function deposit(Request $request)
    {
        return view('v2/deposit')->with(BFF::outputDetail($request));
    }

    public function crypto_payment(Request $request)
    {
        return view('v2/crypto_payment')->with(BFF::outputDetail($request));
    }

    public function crypto_payment_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/txid')->with(BFF::outputDetail($request));
    }

    public function txid(Request $request)
    {
        return view('v2/txid')->with(BFF::outputDetail($request));
    }

    public function txid_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/payment_complete')->with(BFF::outputDetail($request));
    }

    public function payment_complete(Request $request)
    {
        return view('v2/payment_complete')->with(BFF::outputDetail($request));
    }

    public function withdraw(Request $request)
    {
        return view('v2/withdraw')->with(BFF::outputDetail($request));
    }

    public function bank_withdraw_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/withdraw_complete')->with(BFF::outputDetail($request));
    }

    public function crypto_withdraw_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/withdraw_complete')->with(BFF::outputDetail($request));
    }

    public function withdraw_complete(Request $request)
    {
        return view('v2/withdraw_complete')->with(BFF::outputDetail($request));
    }
}
