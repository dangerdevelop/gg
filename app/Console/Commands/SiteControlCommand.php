<?php

namespace App\Console\Commands;

use App\Classes\SiteStatusEnum;
use App\Models\Sites;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SiteControlCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:site-control';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $domains = $this->domains();
        if ($domains->isEmpty())
            return false;

        $this->info('reklamda aktif domainler var');
        $url = 'https://www.usom.gov.tr/api/address/index'; // API URL

        // Stream isteği yap
        $getList = Http::get($url);
        // Eğer istek başarılıysa
        if ($getList->successful()) {
            $this->info('usom list getirildi');
            $content = $getList->json();
            $models = collect($content['models']);
            $list = $models->pluck('url');
            $banList = collect();
            $domains->each(function ($domain) use ($banList, $list) {
                $existsOnList = $list->search($domain);
                if ($existsOnList !== false)
                    $banList->push($domain);
            });
        }


        if ($banList->isNotEmpty()) {
            $this->info('listede bulunan domainler güncellendi');
            $findBanList = Sites::query()
                ->where(function ($query) use ($banList) {
                    foreach ($banList as $ban) {
                        $query->orWhere('site', 'like', "%$ban%");
                    }
                })
                ->update(['status' => SiteStatusEnum::USOM]);
        } else {
            $this->info('liste boş');
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
