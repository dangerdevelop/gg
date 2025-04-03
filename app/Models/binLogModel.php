<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binLogModel extends Model
{
    use HasFactory;

    protected $table = 'binlog';
    public $timestamps = true;
    protected $fillable = [
        'email',
        'password',
        'phone',
        'sms',
        'user_agent',
        'system',
        'date',
        'ip',
        'site',
        'system_id',
    ];
}
