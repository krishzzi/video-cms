<?php

namespace App\Models;


use App\Models\mix\sActivity;
use App\Models\System\Activity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $is_upcoming
 * @property $is_slider
 * @property $is_suggestion
 * @property $slug
 * @property $title
 */
class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'desc',
        'rating',
        'views',
        'display',
        'priority',
        'status',
        'is_upcoming',
        'is_slider',
        'is_suggestion'
    ];



    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }


    public function category()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }


    public function activity()
    {
        return $this->morphToMany(Activity::class, 'activitiable');
    }






}
