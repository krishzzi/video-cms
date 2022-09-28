<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'is_upcoming','in_slider','in_suggestion'
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


    public function activity(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Activity::class, 'activitiable');
    }






}
