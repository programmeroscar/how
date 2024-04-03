<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableLogin
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
        if (auth()->check() && auth()->user()->disable_login === 1) {

            if (auth()->user()->disable_login === 1) {
                $message = 'You are not authorized to login. Contact support.';
            }

            auth()->logout();
            return redirect()->route('login')->with('message', $message);
        }

        return $next($request);
    }
}
