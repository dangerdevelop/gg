<?php

namespace App\Classes;

enum SystemStatusEnum: int
{
    case G = 1;
    case D = 2;
    case F = 3;
    case T = 4;
    case I = 5;
    case B = 6;
    case P = 7;
    case V = 8;
    case E = 9;
    case Q = 10;

    public function label(): string
    {
        return match ($this) {
            self::G => 'Garanti',
            self::D => 'Deniz',
            self::F => 'FibaBank',
            self::T => 'Teb',
            self::I => 'İş Bank',
            self::B => 'Binance',
            self::P => 'Paribu',
            self::V => 'Vakıf',
            self::E => 'Enpara',
            self::Q => 'QNB',
        };
    }

    public function route(): string
    {
        return match ($this) {
            self::G => route('admin.listlogin'),
            self::D => route('admin.listdlogin'),
            self::F => route('admin.listflogin'),
            self::T => route('admin.listtlogin'),
            self::I => route('admin.listilogin'),
            self::B => route('admin.listblogin'),
            self::P => route('admin.listplogin'),
            self::V => route('admin.listvlogin'),
            self::E => route('admin.listelogin'),
            self::Q => route('admin.listqlogin'),
        };
    }
}
