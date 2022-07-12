<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

class V2CompanyController extends Controller
{
    public function company()
    {
        return view('v2/company');
    }
}
