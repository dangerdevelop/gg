<?php
namespace App\Pipes;

use App\Models\IpListModel;
use Carbon\Carbon;

class SaveIpPipe
{
    public function handle($ip, \Closure $next)
    {
        if ($ip->doesntExist()) {
            IpListModel::insert(['ip' => request()->getClientIp(), 'tarih' => Carbon::now(), 'info' => json_encode($_SERVER)]);
        }

        return $next($ip);
    }
}
?>