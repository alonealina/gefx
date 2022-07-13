<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2ContactController extends Controller
{
    public function contact()
    {
        return view('v2/contact');
    }

    public function contact_confirm(Request $request)
    {
        $request;
        return redirect()->to('v2/contact_complete');
    }

    public function contact_complete()
    {
        return view('v2/contact_complete');
    }


}
