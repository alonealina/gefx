<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\V2\BFF;

class V2UserController extends Controller
{
    public function summary(Request $request)
    {
        return view('v2/summary')->with(BFF::outputDetail($request));
    }

    public function history(Request $request)
    {
        $page = isset($request->page) ? $request->page : 1;

        return view('v2/history')->with(BFF::outputDetail($page));
    }

    public function setting()
    {
        return view('v2/setting')->with(BFF::outputDetail());
    }

    public function setting2()
    {
        return view('v2/setting2')->with(BFF::outputDetail());
    }
}
