<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckAccountActivation
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
        if (Auth::user()->activation->status == 0) {
            Auth::logout();
            session()->flash('message', 'Please activate your account.');
            session()->flash('error', 1);
            return redirect('/');
        }

        return $next($request);
    }
}
