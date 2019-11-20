<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class login
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
            if(Auth::user()->role_id == User::ADMIN){
                return $next($request);
            }else{
                return redirect()->route('users.getlogin');
            }
        }else{
            return redirect()->route('users.getlogin');
        } 
    }
}
