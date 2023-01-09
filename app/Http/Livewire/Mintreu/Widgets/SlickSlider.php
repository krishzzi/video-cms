<?php

namespace App\Http\Livewire\Mintreu\Widgets;

use App\Models\Post;
use App\Models\Video;
use Livewire\Component;

class SlickSlider extends Widget
{

    protected ?string $widgetView = 'livewire.mintreu.widgets.slick-slider';

    /**
     * @return void
     */
    protected function resolveAttributes():void
    {
       // dd($this->attributes);
    }
}
