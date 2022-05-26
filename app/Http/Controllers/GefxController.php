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

    public function new_acount()
    {
        return view('new_acount');
    }

    public function news()
    {
        return view('news');
    }

    public function news_detail()
    {
        return view('news_detail');
    }

    public function games()
    {
        return view('games');
    }

    public function technology()
    {
        return view('technology');
    }

    public function partner()
    {
        return view('partner');
    }

    public function contact()
    {
        return view('contact');
    }




}
