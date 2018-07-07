<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserSession
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('authen_type')) {
            // user value cannot be found in session
            return redirect('/admin/login');
        }

        return $next($request);
    }

}