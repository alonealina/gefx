<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2UserController extends Controller
{
    public function summary()
    {
        return view('v2/summary')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function history()
    {
        return view('v2/history')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

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

    public function setting()
    {
        return view('v2/setting')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

    public function setting2()
    {
        return view('v2/setting2')->with([
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",
        ]);
    }

}
