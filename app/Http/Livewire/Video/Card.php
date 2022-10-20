<?php

namespace App\Http\Livewire\Video;

use Livewire\Component;

class Card extends Component
{
    public $like = false;
    public $video;

    public function mount($content)
    {
        $this->video = $content;
//        $this->video->views++;
//        $this->video->save();
      //  dd($this->video);
    }

    public function placeLike()
    {
        dd('sdfdsf');
        $this->video->rating++;
        $this->video->save();
    }



    public function render()
    {
        return view('livewire.video.card');
    }
}
