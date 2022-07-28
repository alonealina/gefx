<?php

namespace App\Models\V2;

class BFF
{
    public static function outputDetail() {
        $closedOrdersExampleJson = '[{"SL":"88.303","TP":"84.409","swap":"-0.33","type":"SELL","login":2096562062,"order":10383239,"profit":"8.97","symbol":"AUDJPYt","volume":"0.15","comment":"Vol:0.147930;M.Order:10383206","open_time":"2021-05-20 10:42:15","close_time":"2021-05-21 04:33:45","commission":"0.00","open_price":"84.47","close_price":"84.404"},{"SL":"1.53453","TP":"1.57355","swap":"0.00","type":"BUY","login":2096562062,"order":10383324,"profit":"7.13","symbol":"EURAUDt","volume":"0.15","comment":"Vol:0.147930;M.Order:10383283","open_time":"2021-05-20 11:01:12","close_time":"2021-05-20 20:29:45","commission":"0.00","open_price":"1.57295","close_price":"1.57357"},{"SL":"1.53447","TP":"1.57349","swap":"0.00","type":"BUY","login":2096562062,"order":10383623,"profit":"27.58","symbol":"EURAUDt","volume":"0.16","comment":"Vol:0.161378;M.Order:10383584","open_time":"2021-05-20 13:31:27","close_time":"2021-05-20 20:29:35","commission":"0.00","open_price":"1.57135","close_price":"1.57355"},{"SL":"88.301","TP":"84.407","swap":"-0.36","type":"SELL","login":2096562062,"order":10383848,"profit":"32.93","symbol":"AUDJPYt","volume":"0.16","comment":"Vol:0.161378;M.Order:10383807","open_time":"2021-05-20 14:23:49","close_time":"2021-05-21 04:33:46","commission":"0.00","open_price":"84.626","close_price":"84.404"},{"SL":"1.53778","TP":"1.57402","swap":"0.00","type":"BUY","login":2096562062,"order":10385557,"profit":"-37.75","symbol":"EURAUDt","volume":"0.13","comment":"Vol:0.134481;M.Order:10385524","open_time":"2021-05-21 08:00:02","close_time":"2021-05-21 14:36:49","commission":"0.00","open_price":"1.57772","close_price":"1.57409"},{"SL":"1.53772","TP":"1.57396","swap":"0.00","type":"BUY","login":2096562062,"order":10385772,"profit":"-23.68","symbol":"EURAUDt","volume":"0.15","comment":"Vol:0.147930;M.Order:10385732","open_time":"2021-05-21 09:01:46","close_time":"2021-05-21 14:36:31","commission":"0.00","open_price":"1.57609","close_price":"1.57402"},{"SL":"1.53772","TP":"1.57396","swap":"0.00","type":"BUY","login":2096562062,"order":10385923,"profit":"-6.12","symbol":"EURAUDt","volume":"0.16","comment":"Vol:0.161378;M.Order:10385890","open_time":"2021-05-21 09:56:42","close_time":"2021-05-21 14:36:31","commission":"0.00","open_price":"1.57451","close_price":"1.57402"},{"SL":"1.53771","TP":"1.57395","swap":"0.00","type":"BUY","login":2096562062,"order":10386057,"profit":"14.61","symbol":"EURAUDt","volume":"0.18","comment":"Vol:0.178188;M.Order:10386024","open_time":"2021-05-21 10:49:30","close_time":"2021-05-21 14:36:31","commission":"0.00","open_price":"1.57296","close_price":"1.57402"},{"SL":"1.53774","TP":"1.57398","swap":"0.00","type":"BUY","login":2096562062,"order":10386136,"profit":"40.19","symbol":"EURAUDt","volume":"0.20","comment":"Vol:0.198360;M.Order:10386103","open_time":"2021-05-21 11:03:27","close_time":"2021-05-21 14:36:49","commission":"0.00","open_price":"1.57142","close_price":"1.57404"},{"SL":"1.5378","TP":"1.57404","swap":"0.00","type":"BUY","login":2096562062,"order":10386299,"profit":"73.22","symbol":"EURAUDt","volume":"0.22","comment":"Vol:0.215170;M.Order:10386257","open_time":"2021-05-21 11:58:37","close_time":"2021-05-21 14:36:49","commission":"0.00","open_price":"1.56967","close_price":"1.57407"}]';
        
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

            "closedOrders" => json_decode($closedOrdersExampleJson, true),
            "closedOrdersAreMore" => true,
        ];
    }
}
