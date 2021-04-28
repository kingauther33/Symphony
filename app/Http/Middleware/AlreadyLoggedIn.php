<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
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
        if(session()->has('LoggedUser')) {
            if (session('LoggedRole') == 2  && (url('login') == $request->url())) {
                return redirect()->route('admin.staff');
            } else if (session('LoggedRole') == 1  && (url('login') == $request->url())) {
                return redirect()->route('counselor.home');
            } else if (session('LoggedRole') == 3  && (url('login') == $request->url())) {
                return redirect()->route('teacher.home');
            } else if (session('LoggedRole') == 4  && (url('login') == $request->url())) {
                return redirect()->route('student.profile');
            }
        }

        return $next($request);
    }
}
