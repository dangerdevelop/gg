<?php

namespace App\Http\Middleware;

use App\Models\IpListModel;
use App\Pipes\ForbiddenBan;
use App\Pipes\IpbanPipe;
use App\Pipes\LocationBan;
use App\Pipes\SaveIpPipe;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Symfony\Component\HttpFoundation\Response;

class SaveIPMigration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = request()->header('X-Forwarded-For') ?? $request->getClientIp();       
        $checkIp = IpListModel::query()->where('ip', $ip);
        app(Pipeline::class)->send($checkIp)
            ->through([
                // ForbiddenBan::class,
                SaveIpPipe::class,
                IpbanPipe::class,
                LocationBan::class,
            ])->thenReturn();


        return $next($request);
    }
}
