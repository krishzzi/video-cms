<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;


    public const SPOT_BOTTOM_RIGHT='bottom_right';
    public const SPOT_BOTTOM_LEFT='bottom_left';
    public const SPOT_BOTTOM_CENTER='bottom_center';
    public const SPOT_RIGHT='right';
    public const SPOT_LEFT='left';
    public const SPOT_SPLASH = 'splash';


    public const SPOT_ALIGNMENT = [
        self::SPOT_BOTTOM_RIGHT => 'Bottom Right',
        self::SPOT_BOTTOM_LEFT => 'Bottom Left',
        self::SPOT_BOTTOM_CENTER => 'Bottom Center',
        self::SPOT_RIGHT => 'Right',
        self::SPOT_LEFT => 'Left',
        self::SPOT_SPLASH => 'Splash'
    ];


//    public const SPOT_VALUES = [
//        self::SPOT_BOTTOM_RIGHT => 'Bottom Right',
//        self::SPOT_BOTTOM_LEFT => 'Bottom Left',
//        self::SPOT_BOTTOM_CENTER => 'Bottom Center',
//        self::SPOT_RIGHT => 'Right',
//        self::SPOT_LEFT => 'Left',
//        self::SPOT_SPLASH => 'Splash'
//    ];


    public const SPOT_STATUS_DRAFT = 'draft';
    public const SPOT_STATUS_PUBLISH = 'publish';
    public const SPOT_STATUS_RESUME = 'resume';
    public const SPOT_STATUS_COMPLETE = 'complete';

    public const SPOT_STATUS = [
        self::SPOT_STATUS_DRAFT => 'Draft',
        self::SPOT_STATUS_PUBLISH => 'Publish',
        self::SPOT_STATUS_RESUME => 'Resume',
        self::SPOT_STATUS_COMPLETE => 'Complete',
    ];


    protected $fillable =[
        'name',
        'code',
        'is_private',
        'target_url',
        'target_banner',
        'target_views',
        'expire_at',
        'totals_views',
        'alignment',
        'is_modal',
        'cost_per_view',
        'active',
        'status',
    ];


//    protected $casts = [
//        ''
//    ];











}
