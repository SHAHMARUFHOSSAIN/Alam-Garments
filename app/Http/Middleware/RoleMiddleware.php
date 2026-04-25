<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $role = auth()->user()->role;

        // superadmin always pass
        if ($role === 'superadmin') {
            return $next($request);
        }

        if (!in_array($role, $roles)) {
            abort(403);
        }

        return $next($request);
    }
}