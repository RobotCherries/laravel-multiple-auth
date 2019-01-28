<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\Auth\JwtGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
        if ($guard == "manager" && Auth::guard($guard)->check()) {
            return redirect('/manager');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/worker');
        }

        return $next($request);
    }
}