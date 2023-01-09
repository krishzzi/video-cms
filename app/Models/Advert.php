<?php

namespace App\Models;

use App\Models\mix\sActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;


    protected $fillable = [
        'provider',
        'type',
        'position',
        'priority',
        'expire_at',
        'target_url',
        'target_banner',
        'target_views',
        'code',
        'finish',
        'status',
    ];




    public function activity(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(sActivity::class, 'activitiable');
    }




}
