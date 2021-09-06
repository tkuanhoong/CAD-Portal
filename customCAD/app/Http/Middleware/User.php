<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class User
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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        //role 1 = Admin
        if(Auth::user()->role == 1){
            return redirect()->route('admin');
            
        }

        //role 2 = User
        if(Auth::user()->role == 2){
            
            return $next($request);
        }
    }
}
