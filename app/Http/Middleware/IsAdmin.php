<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
         {
            if(Auth::user()->is_admin == 'aurabais1')
            {
                return $next($request);
            }
            else
            {
                return redirect('/')->with('status', 'Access Denied! as you are note as admin');
            }
         }
         else
         {
            return redirect('/home')->with('status', 'Please Login First');
         }

    }
    

    
}

