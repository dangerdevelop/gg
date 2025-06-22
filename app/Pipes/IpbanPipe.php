<?php
namespace App\Pipes;

use App\Models\IpListModel;

class IpbanPipe
{
    public function handle($ip, \Closure $next)
    {        
        if ($ip->exists() && $ip->first()->ban) {
            return abort(404);
        }

        return $next($ip);
    }
}
?>