<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class authCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $except = [
            'admin.login',
            'admin.auth',
        ];
        if (!in_array($request->route()->getName(), $except) && !auth('web')->check()) {
            return redirect(route('admin.login'));
        }
        return $next($request);
    }
}
