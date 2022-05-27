<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Girl;

class GefxController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function faq()
    {
        return view('faq');
    }

    public function new_acount()
    {
        return view('new_acount');
    }

    public function demo_acount()
    {
        return view('demo_acount');
    }

    public function login()
    {
        return view('login');
    }

    public function company()
    {
        return view('company');
    }

    public function contact()
    {
        return view('contact');
    }


    public function summary()
    {
        return view('summary');
    }

    public function history()
    {
        return view('history');
    }

    public function deposit()
    {
        return view('deposit');
    }





}
