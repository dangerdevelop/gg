<?php

namespace App\Models;

use App\Classes\SiteStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sites extends Model
{
    use HasFactory;
    protected $table = 'sites';
    public $timestaps = true;
    protected $fillable = ['site', 'status','system'];
    
    public function logs():HasMany
    {
        return $this->hasMany(LoginModel::class,'system_id');
    }
}
