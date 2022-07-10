<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Girl;

class GefxController extends Controller
{
    public function index()
    {
        return view('v2/index');
    }

    public function faq()
    {
        return view('v2/faq');
    }

    public function new_acount()
    {
        return view('v2/new_acount');
    }

    public function demo_acount()
    {
        return view('v2/demo_acount');
    }

    public function login()
    {
        return view('v2/login');
    }

    public function company()
    {
        return view('v2/company');
    }

    public function contact()
    {
        return view('v2/contact');
    }


    public function summary()
    {
        return view('v2/summary');
    }

    public function history()
    {
        return view('v2/history');
    }

    public function deposit()
    {
        return view('v2/deposit');
    }

    public function transfer()
    {
        return view('v2/transfer');
    }

    public function add_acount()
    {
        return view('v2/add_acount');
    }

    public function setting()
    {
        return view('v2/setting');
    }

    public function setting2()
    {
        return view('v2/setting2');
    }





}
