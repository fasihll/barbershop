<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class owner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('is_admin') == 3 or session('is_admin') == 2 or session('is_admin') == 1 or session('is_admin') == 4) {
            # code...
            return $next($request);
        }
        return back();
    }
}
