<?php

namespace App\Models\System\Theme;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'component',
        'attributes',
        'status',
        'features',
        'priority',
        'is_default'
    ];

    protected $casts = [
        'attributes' => 'array',
        'features' => 'array'
    ];


    public function themePage()
    {
        return $this->belongsTo(ThemePage::class);
    }

}
