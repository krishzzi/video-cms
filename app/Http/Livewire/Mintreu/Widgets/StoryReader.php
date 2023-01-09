<?php

namespace App\Http\Livewire\Mintreu\Widgets;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class StoryReader extends Widget
{


    protected ?string $widgetView = 'livewire.mintreu.widgets.story-reader';

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
