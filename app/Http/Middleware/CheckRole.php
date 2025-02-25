<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        // Get the current user
        $user = Auth::user();

        // Split the roles into an array
        $rolesArray = explode('|', $roles);

        // Check if the user has at least one of the roles
        foreach ($rolesArray as $role) {
            if ($user->hasRole($role)) {
                return $next($request); // Allow the request to proceed if the user has a valid role
            }
        }

        // If the user doesn't have any of the roles, redirect or abort with a 403
        return abort(403, 'Unauthorized action.');
        // return $next($request);
    }
}
