<?php

namespace App\Http\Livewire\Mintreu\Slider;

use App\Models\Post;
use App\Models\Video;
use Livewire\Component;

class BigSlider extends Component
{

    private $sliders;

    public function mount($type='')
    {

        if($type == 'post' | $type == 'story')
        {
            $this->sliders = Post::where('in_slider',true)->where('status',true)->orderby('priority')->paginate();
        }elseif ($type == 'video')
        {
            $this->sliders = Video::where('in_slider',true)->where('status',true)->orderby('priority')->paginate();
        }

    }


    public function render()
    {
        return view('livewire.mintreu.slider.big-slider')->with('sliders',$this->sliders);
    }
}
