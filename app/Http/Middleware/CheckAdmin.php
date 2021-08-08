<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckAdmin
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
        if(Auth::user()->role != 'admin')
        {
            if(Auth::user()->role != 'medic')
            {
                return redirect()->route('user.dashboard');
            }
            else 
            {
                return redirect()->route('medic.dashboard');
            }
        }
        return $next($request);
    }
}
