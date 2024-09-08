<?php

namespace App\Http\Middleware;

use App\Attributes\HasPermissions;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ReflectionMethod;
use Symfony\Component\HttpFoundation\Response;

class CheckPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && ! auth()->user()->hasDirectPermission('super')) {

            $controller = $request->route()->getController();
            $method = $request->route()->getActionMethod();

            $reflection = new ReflectionMethod($controller, $method);
            // Methoda tanımlanmış HasPermissions attribute'unu bul
            $attributes = $reflection->getAttributes(HasPermissions::class);
            if ($attributes) {
                $attributeArgs = $attributes[0]->getArguments(); // arguments array'ini alır
                $requiredPermissions = $attributeArgs[0] ?? []; // ilk argüman permissions olarak kabul ediliyor
                // Kullanıcının gerekli yetkilere sahip olup olmadığını kontrol et
                if (!auth()->user()->hasAnyPermission($requiredPermissions)) {
                    abort(403, 'Bu işlemi gerçekleştirmek için gerekli izniniz yok.');
                }
            }
        }
        return $next($request);
    }
}
