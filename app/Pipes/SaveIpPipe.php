<?php

namespace App\Pipes;

use App\Models\IpListModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SaveIpPipe
{
    public function handle($ip, \Closure $next)
    {
        $userIP = request()->getClientIp();
        $ifExistsIp = IpListModel::query()->where('ip', $userIP)->exists();
        if ($ifExistsIp) {
            IpListModel::query()->where('ip', $userIP)->increment('total');
        } else {
            IpListModel::insert([
                'ip' => request()->getClientIp(),
                'tarih' => Carbon::now(),
                'info' =>  request()->headers->get('referer')
            ]);
        }
        return $next($ip);
    }
}
