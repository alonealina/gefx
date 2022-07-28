<?php

namespace App\Models\V2;

class BFF
{
    public static function outputDetail() {
        return [
            "name" => "Name Test",
            "account_number" => "2131905483",
            "account_type" => "USD",
            "leverage" => "0",
            "mail" => "example@gmail.com",
            "opening_date" => "2021-09-28 13:09:30",

            "account_balance" => "1000.00",
            "effective_margin" => "2000.00",
            "margin_required" => "3000.00",
            "surplus_margin" => "4000.00",
            "margin_rate" => "100",
            "status" => 1,
            
            "peyment" => "2573.88",
            "withdraw" => "-480",
            "adj" => "0",
            "swap" => "-67.51",
            "fixed_pl" => "1470.32",
        ];
    }
}
