<?php

namespace App\Classes;

enum SiteStatusEnum: int
{
    case BEKLEMEDE = 0;
    case REKLAMDA = 1;
    case USOM = 2;
    case PROBLEMLI = 3;


    public function label():string{
        return match($this)
        {
            self::BEKLEMEDE => 'Beklemede',
            self::REKLAMDA => 'Reklamda',
            self::USOM => 'USOM',
            self::PROBLEMLI => 'PROBLEMLI'
        };
    }

    public function text($text):string{
        return match($this)
        {
            self::BEKLEMEDE => 'Beklemede',
            self::REKLAMDA => 'Reklamda',
            self::USOM => 'USOM',
            self::PROBLEMLI => 'PROBLEMLI'
        };
    }
}
