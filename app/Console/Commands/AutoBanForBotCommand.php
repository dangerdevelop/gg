<?php

namespace App\Console\Commands;

use App\Models\IpListModel;
use Illuminate\Console\Command;

class AutoBanForBotCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:auto-ban';

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
        $ipList = IpListModel::query()->where(function ($query) {
            $query->where('ban', 0)->where('total', '>=', 100);
        })->update(['ban' => 1]);
    }
}
