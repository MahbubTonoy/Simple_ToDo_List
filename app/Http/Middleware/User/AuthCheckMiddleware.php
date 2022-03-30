<?php

namespace App\Http\Middleware\User;

use Closure;
use Illuminate\Http\Request;

class AuthCheckMiddleware
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
        if (!session()->has('usrToken') && ($request->path() !== "login" && $request->path() !== 'register')) {
            return redirect()->route('login')->with("errors", "You Must Log In First");
        } 
        else if (
            session()->has('usrToken') && 
            ($request->path() === "login" || 
            $request->path() === 'register')
        ) {
            return redirect()->route('dashboard');
        }
        return $next($request)
            ->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat 01 Jan 1990 GMT 00:00:00');
    }
}
