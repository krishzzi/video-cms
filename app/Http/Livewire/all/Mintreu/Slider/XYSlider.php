<?php

namespace App\Http\Livewire\all\Mintreu\Slider;

use App\Models\Post;
use App\Models\Video;
use Livewire\Component;

class XYSlider extends Component
{
    public $title='Slider Title';
    private $sliders;
    public $type;


    public function mount($type='')
    {

        if($type =='video')
        {
            $this->sliders = Video::where('status',true)->orderBy('priority')->latest()->paginate(20);
        }elseif($type == 'post'){
            $this->sliders = Post::where('status',true)->orderBy('priority')->latest()->paginate(20);
        }else{
            $this->sliders = collect([]);
        }
        $this->type = $type;
    }



    public function render()
    {
        return view('livewire.mintreu.slider.x-y-slider')->with('sliders',$this->sliders);
    }
}
