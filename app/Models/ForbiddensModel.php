<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForbiddensModel extends Model
{
    use HasFactory;

    protected $table = 'forbiddens';
    protected $fillable = [
        'tip',
        'value',
        'redirect'
    ];
}
