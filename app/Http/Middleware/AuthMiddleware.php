<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated as a user or a company
        if (Auth::check()) {
            return $next($request);
        }

        if (Auth::guard('company')->check()) {
            return $next($request);
        }

        // If neither guard is authenticated, abort the request
        Log::info('User is not authenticated as user or company');
        return abort(403, 'USER IS NOT LOGGED IN.');
    }
}
