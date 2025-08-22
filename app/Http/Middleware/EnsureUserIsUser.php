<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and if their role is 'user'
        if (auth()->check() && auth()->user()->role === 'user') {
            return $next($request);
        }

        // If not a regular user, abort with a 403 Forbidden error
        abort(403, 'Unauthorized Access');
    }
}
