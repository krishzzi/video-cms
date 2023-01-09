<?php

namespace App\Models\System\Theme;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemePage extends Model
{
    use HasFactory;

    public const INDEX_PAGE = 'index_page';
    public const VIEW_VIDEO_PAGE = 'view_video_page';
    public const VIEW_POST_PAGE = 'view_post_page';
    public const LIST_VIDEO_PAGE = 'list_video_page';
    public const LIST_POST_PAGE = 'list_post_page';

    public const PAGE_OPTIONS = [
        self::INDEX_PAGE => 'Index Page',
        self::VIEW_VIDEO_PAGE => 'View Video Page',
        self::VIEW_POST_PAGE => 'Video Post Page',
        self::LIST_VIDEO_PAGE => 'List Video Page',
        self::LIST_POST_PAGE => 'List Post Page',
    ];



    protected $fillable = [
        'name',
        'slug',
        'status',
        'page',
        'redirect',
        'features',
        'query',
        'type',
        'is_default'
    ];

    protected $casts = [
        'features' => 'array',

    ];



    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }


    public function widgets()
    {
        return $this->hasMany(Widget::class);
    }



}
