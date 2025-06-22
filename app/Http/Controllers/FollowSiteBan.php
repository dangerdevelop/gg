<?php

namespace App\Http\Controllers;

use App\Classes\SiteStatusEnum;
use App\Models\Sites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FollowSiteBan extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function handle(Request $request)
    {
        $domain = $request->domain;
        if ($domain) {
            $filterDomain = str_replace(['https://', '/'], ['', ''], $domain);

            $endpoint = 'https://www.usom.gov.tr/api/address/index?q=' . $filterDomain;

            $checkPoint = Http::timeout(20)->get($endpoint);
            if ($checkPoint->successful()) {
                $responseJson = $checkPoint->json();
                $exists = $responseJson['count'];

                if ($exists) {
                    Sites::query()->orWhere('site', 'like', "%$filterDomain%")
                        ->update(['status' => SiteStatusEnum::USOM]);
                    return response()->json(['status' => 'success']);
                }
            }

            return response()->json(['status' => 'empty']);
        }
    }


    public function domains()
    {
        $sites = Sites::query()->where('status', SiteStatusEnum::REKLAMDA)->get();
        if ($sites->isNotEmpty()) {
            $siteList = $sites->pluck('site');
            $domains = $siteList->map(function ($site) {
                return str_replace(['https://', '/'], ['', ''], $site);
            });
        }
        return $domains ?? collect();
    }
}
