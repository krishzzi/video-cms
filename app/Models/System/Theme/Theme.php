<?php

namespace App\Models\System\Theme;

use App\Models\System\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'is_active',
        'is_default',
        'appearance',
        'status'
    ];

    protected $casts = [
        'appearance' => 'array',

    ];


    public function system()
    {
        return $this->belongsTo(System::class);
    }

    public function pages()
    {
        return $this->hasMany(ThemePage::class);
    }




}
