<?php

namespace App\Models\System;

use App\Models\System\Plugin\Plugin;
use App\Models\System\Theme\Theme;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;


    public const SLUG_DEFAULT = 'slug_default';
    public const SLUG_WITH_DATETIME = 'slug_dateTime';
    public const SLUG_WITH_DATE = 'slug_date';
    public const SLUG_UNIQUE = 'slug_unique';

    public const SLUG_OPTIONS = [
        self::SLUG_DEFAULT => 'Default With No Suffix',
        self::SLUG_WITH_DATE => 'With Date Suffix',
        self::SLUG_WITH_DATETIME => 'With DateTime Suffix',
        self::SLUG_UNIQUE => 'With Random Suffix',
    ];

    protected $fillable = [
        'name','theme','header','footer','contact_us','logo','age_restrict','meta','default'
    ];


    protected $casts = [
        'age_restrict' => 'bool',
        'default' => 'bool',
        'meta' => 'array',
        'social' => 'array'
    ];




    public function themes()
    {
        return $this->hasMany(Theme::class);
    }

    public function plugins()
    {
        return $this->hasMany(Plugin::class);
    }




}
