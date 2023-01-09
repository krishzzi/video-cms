<?php

namespace App\Http\Livewire\all\Mintreu\Slider;

use App\Models\Post;
use App\Models\Video;
use Livewire\Component;

class ContentSlider extends Component
{
    public $sortBy='updated_at';
    public $title='Content Title';
    public $type;
    private $contents;

    public function mount($type='')
    {
        if($type =='video')
        {
            $this->contents = Video::where('status',true)->orderBy('priority')->latest()->paginate();
        }elseif($type == 'post'){
            $this->contents = Post::where('status',true)->orderBy('priority')->latest()->paginate();
        }else{
            $this->contents = collect([]);
        }
        $this->type = $type;

    }


    public function render()
    {
        return view('livewire.mintreu.slider.content-slider')->with('contents',$this->contents);
    }
}
