<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2AddAcountController extends Controller
{
    public function add_acount()
    {
        return view('v2/add_acount')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
            "name" => "Name Test",
        ]);
    }

    public function add_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/add_acount_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function add_acount_complete()
    {
        return view('v2/add_acount_complete')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

}
