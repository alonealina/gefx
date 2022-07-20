<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2TransferController extends Controller
{
    public function transfer()
    {
        return view('v2/transfer')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function transfer_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/transfer_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function transfer_complete()
    {
        return view('v2/transfer_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }


}
