<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'like',
        'share',
        'inlist',
        'rate',
        'view',
        'ip',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsToMany(User::class);
    }


    /**
     * Get all record of the posts that are assigned this tag.
     */
    public function adverts()
    {
        return $this->morphedByMany(Advert::class, 'activitiable');
    }



    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'activitiable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'activitiable');
    }


    /**
     * Get all of the videos that are assigned this tag.
     */
    public function categories()
    {
        return $this->morphedByMany(Category::class, 'activitiable');
    }





}
