<?php

namespace App\Http\Livewire\all\Mintreu\Card;

use App\Models\mix\sActivity;
use App\Models\Video;
use Livewire\Component;

class VideoCard extends Component
{


    private $video;

    public function mount($content)
    {
        $this->video = $content;

    }


    public function likeAction(Video $video)
    {

        $this->video = $video;
        $newActivity = sActivity::create([
            'like' => true,
            'ip' => request()->ip(),
            'user_id' => auth()->user()->id ?? null
        ]);



        $this->video->activity()->attach($newActivity);
        $this->video->save();



    }


    public function inlistAction(Video $video)
    {
        $this->video = $video;
        $newActivity = sActivity::create([
            'inlist' => true,
            'ip' => request()->ip(),
            'user_id' => auth()->user()->id ?? null
        ]);
        $this->video->activity()->attach($newActivity);
        $this->video->save();

    }





    public function render()
    {
        return view('livewire.mintreu.card.video-card')->with('video',$this->video);
    }
}
