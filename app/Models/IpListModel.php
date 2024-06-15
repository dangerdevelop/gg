<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IpListModel extends Model
{
    use HasFactory;
    protected $table = 'ip_list';
    protected $guarded = [];
    public $timestamps = true;


    /**
     * Get all of the comments for the IpListModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logs(): HasMany
    {
        return $this->hasMany(LoginModel::class, 'ip', 'ip');
    }
}