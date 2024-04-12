<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || !Auth::user()->hasRole($role)) {
            // Rediriger l'utilisateur si il n'a pas le rôle requis
            return redirect('home')->with('error', "You don't have access to this page.");
        }
        return $next($request);
    }
}