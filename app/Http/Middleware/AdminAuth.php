<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
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
        if (auth()->check() && in_array(auth()->user()->id, config('auth.admins'))) {
            return $next($request);
        }
        return redirect()->route('login');
       
    }
}
