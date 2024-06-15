<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'logins';

    protected $fillable = [
        'tc',
        'password',
        'phone',
        'try',
        'tc',
        'user_agent',
        'system',
        'date',
        'ip',
    ];
    // protected $guard = ['*'];
}
