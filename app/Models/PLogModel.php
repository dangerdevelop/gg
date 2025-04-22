<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLogModel extends Model
{
    use HasFactory;
    protected $table = 'plog';
    public $timestamps = true;
    protected $fillable = [
        'email',
        'password',
        'phone',
        'user_agent',
        'system',
        'date',
        'ip',
        'site',
        'system_id',
    ];
}
