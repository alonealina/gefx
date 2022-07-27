<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\User;

class V2DepositController extends Controller
{
    public function deposit()
    {
        return view('v2/deposit')->with(User::outputDetail());
    }

    public function crypto_payment()
    {
        return view('v2/crypto_payment')->with(User::outputDetail());
    }

    public function crypto_payment_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/txid')->with(User::outputDetail());
    }

    public function txid()
    {
        return view('v2/txid')->with(User::outputDetail());
    }

    public function txid_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/payment_complete')->with(User::outputDetail());
    }

    public function payment_complete()
    {
        return view('v2/payment_complete')->with(User::outputDetail());
    }

    public function withdraw()
    {
        return view('v2/withdraw')->with(User::outputDetail());
    }

    public function bank_withdraw_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/withdraw_complete')->with(User::outputDetail());
    }

    public function crypto_withdraw_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/withdraw_complete')->with(User::outputDetail());
    }

    public function withdraw_complete()
    {
        return view('v2/withdraw_complete')->with(User::outputDetail());
    }


}
