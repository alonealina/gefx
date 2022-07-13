<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2DepositController extends Controller
{
    public function deposit()
    {
        return view('v2/deposit');
    }

    public function crypto_payment()
    {
        return view('v2/crypto_payment');
    }

    public function crypto_payment_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/txid');
    }

    public function txid()
    {
        return view('v2/txid');
    }

    public function txid_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/payment_complete');
    }

    public function payment_complete()
    {
        return view('v2/payment_complete');
    }

    public function withdraw()
    {
        return view('v2/withdraw');
    }

    public function bank_withdraw_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/withdraw_complete');
    }

    public function crypto_withdraw_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/withdraw_complete');
    }

    public function withdraw_complete()
    {
        return view('v2/withdraw_complete');
    }


}
