<?php

namespace App\Models;

use App\Models\mix\sActivity;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','slug','parent_id',
    ];



    public function scopeParents(Builder $builder)
    {
        $builder->whereNull('parent_id');
    }

    public function scopeNotParents(Builder $builder)
    {
        $builder->doesntHave('children');
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(static::class, 'parent_id', 'id');
    }



    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categoryable');
    }

    public function activePosts()
    {
        return $this->posts()->where('status',true);
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'categoryable');
    }


    public function activeVideos()
    {
        return $this->videos()->where('status',true);
    }



    public function activity(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(sActivity::class, 'activitiable');
    }


}
