<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class email
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::user()->email_verified_at) {
            Auth::logout();
            return redirect()->route('login')->with('warning', 'Check your email and activate account');
        }
        return $next($request);
    }
}
