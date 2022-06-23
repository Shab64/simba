<?php

namespace App\Http\Middleware;

use Closure;

class IsCustomer
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
        if (!empty(Auth::user()) and Auth::user()->role === 'customer') {
            return $next($request);
        }
        return redirect('/login');
    }
}
