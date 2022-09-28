<?php

namespace App\Http\Livewire\Mintreu\Slider;


use App\Models\Post;
use App\Models\Video;
use Livewire\Component;

class SuggestionSlider extends Component
{

    public $title='Slider Title';

    private $suggestion;
    public $type;

    public function mount($type='')
    {

        $type = trim($type);
        if($type ==='video')
        {
            $this->suggestion = Video::where('in_suggestion',true)->where('status',true)->orderBy('priority')->paginate(20);
        }elseif($type === 'post'){
            $this->suggestion = Post::where('in_suggestion',true)->where('status',true)->orderBy('priority')->paginate(20);
        }else{
            $this->suggestion = collect([]);
        }
        $this->type = $type;


    }



    public function render()
    {
        return view('livewire.mintreu.slider.suggestion-slider')->with('suggestion',$this->suggestion);
    }
}
