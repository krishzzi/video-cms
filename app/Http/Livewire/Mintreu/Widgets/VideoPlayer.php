<?php

namespace App\Http\Livewire\Mintreu\Widgets;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Livewire\Component;

class VideoPlayer extends Widget
{
    protected ?string $widgetView = 'livewire.mintreu.widgets.video-player';



    /**
     * @return void
     */
    protected function resolveAttributes(): void
    {
        if (isset($this->attributes['record']))
        {
            $this->record =  $this->attributes['record'];
            $this->record->load('tags','category','comments');
        }
    }




}
