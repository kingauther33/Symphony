<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheckTeacher
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
        if(!session()->has('LoggedUser')) {
            return redirect('login')->with('fail', 'You must log in');
        } else if(session('LoggedRole') != 3) {
            return redirect('error');
        }

        return $next($request);
    }
}
