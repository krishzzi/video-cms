<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','slug','parent_id',
    ];


    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categoryable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'categoryable');
    }



    public function activity(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Activity::class, 'activitiable');
    }


}
