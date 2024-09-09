<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoginModel extends Model
{
    use HasFactory, SoftDeletes;
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
        'site',
        'system_id',
    ];
    // protected $guard = ['*'];

    public function system(): HasMany
    {
        return $this->hasMany(Sites::class, 'system');
    }
}
