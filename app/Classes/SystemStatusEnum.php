<?php

namespace App\Classes;

enum SystemStatusEnum: int
{
    case G = 1;
    case D = 2;

    public function label(): string
    {
        return match ($this) {
            self::G => 'Garanti',
            self::D => 'Deniz'
        };
    }

    public function route():string
    {
        return match($this)
        {
            self::G => route('admin.listlogin'),
            self::D => route('admin.listdlogin')
        };
    }
}