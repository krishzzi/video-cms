<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;


    protected $fillable = [
        'name','theme','header','footer','contact_us','logo','age_restrict','meta','default'
    ];


    protected $casts = [
        'age_restrict' => 'bool',
        'default' => 'bool',
        'meta' => 'array',
    ];














}
