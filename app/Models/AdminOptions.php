<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOptions extends Model
{
    use HasFactory;
    protected $table = 'admin_options';
    public $timestamp = true;
    protected $guarded = [];
}
