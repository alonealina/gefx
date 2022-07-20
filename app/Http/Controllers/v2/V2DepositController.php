<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2DepositController extends Controller
{
    public function deposit()
    {
        return view('v2/deposit')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function crypto_payment()
    {
        return view('v2/crypto_payment')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function crypto_payment_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/txid')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function txid()
    {
        return view('v2/txid')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function txid_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/payment_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function payment_complete()
    {
        return view('v2/payment_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function withdraw()
    {
        return view('v2/withdraw')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function bank_withdraw_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/withdraw_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function crypto_withdraw_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/withdraw_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function withdraw_complete()
    {
        return view('v2/withdraw_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }


}
