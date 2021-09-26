<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AdminMiddleware
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
        if (Cookie::get('login') == 'true') {
            return $next($request);
        }

        if($request->ajax()){
            return response()->json(['redirect' => Cookie::get('login')], 200);
            // return response()->json(['redirect' => route('logout')], 200);
        }
        else{
            return redirect()->route('logout');
        }
    }
}
