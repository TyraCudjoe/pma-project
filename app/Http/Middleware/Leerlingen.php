<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Leerlingen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // return $next($request);
        if (!Auth::check()){
            return redirect()->route('login');
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('leerlingen');
        }
    }
}
