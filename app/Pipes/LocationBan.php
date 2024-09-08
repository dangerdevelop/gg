<?php

namespace App\Pipes;

use App\Models\AdminOptions;
use App\Models\IpListModel;

class LocationBan
{
    public function handle($ip, \Closure $next)
    {
        $slug = AdminOptions::firstWhere('key', 'kampanya_link')->value;
        if (request()->is($slug) || request()->is('join')) {
            $user_ip = $ip->value('ip');
            $aboardLogin = AdminOptions::firstWhere('key', 'yurtdisi_giris');

            if ($aboardLogin->value == 'kapali') {

                $api_url = "http://www.geoplugin.net/json.gp?ip=" . $user_ip;
                $response = file_get_contents($api_url);
                $geo_data = json_decode($response);
                if ($geo_data->geoplugin_countryCode != 'TR') {
                    return abort(404);
                }
            }
        }
        return $next($ip);
    }
}
