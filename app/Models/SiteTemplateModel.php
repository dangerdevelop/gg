<?php

namespace App\Models;

use App\Classes\SiteStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sites extends Model
{
    use HasFactory;
    protected $table = 'site_templates';
    public $timestaps = true;
    protected $fillable = ['site_id', 'status','system'];
    
    public function logs():HasMany
    {
        return $this->hasMany(LoginModel::class,'system_id');
    }
}
