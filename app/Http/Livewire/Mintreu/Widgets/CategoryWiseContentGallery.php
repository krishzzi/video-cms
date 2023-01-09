<?php

namespace App\Http\Livewire\Mintreu\Widgets;

use App\Models\Category;
use Livewire\Component;

class CategoryWiseContentGallery extends Widget
{
    protected ?string $widgetView = 'livewire.mintreu.widgets.category-wise-content-gallery';


    /**
     * @return void
     */
    protected function resolveAttributes(): void
    {
        if ($this->attributes['type'] == 'video')
        {

            $this->records = Category::with('activeVideos')->where('status',true)->limit($this->attributes['limit'])->get();
        }elseif($this->attributes['type'] == 'post'){
            $this->records = Category::with('activePosts')->where('status',true)->limit($this->attributes['limit'])->get();
        }else{
            $this->records = null;
        }

    }
}
