<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\User;

class IsAdmin
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
        if (Auth::check()) {
            if(Auth::user()->role_id == User::ACTIVE )
            {
                return $next($request);
            }else if(Auth::user()->role_id == User::SUP_ADMIN )
            {
                return $next($request);
            }else 
            {
                return view('products.index');
            }
        } 
    }
}
