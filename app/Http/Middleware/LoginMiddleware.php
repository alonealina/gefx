<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // 未ログイン
        if(!session()->has('login_id')){
            return redirect('v2/login');
        }

        return $next($request);
    }
}
