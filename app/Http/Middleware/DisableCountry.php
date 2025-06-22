<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Torann\GeoIP\Facades\GeoIP;
use Torann\GeoIP\GeoIP as GeoIPGeoIP;

class DisableCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $location = GeoIP::getLocation($request->ip());
        if ($location->country != 'Turkey') {
            return redirect()->route('not-allowed'); // Yönlendirilmek istenilen route
        }
        return $next($request);
    }
}
