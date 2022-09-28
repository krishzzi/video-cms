<?php

namespace App\Http\Livewire\Mintreu\Card;

use App\Models\Activity;
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



        $newActivity = Activity::create([
            'like' => true,
            'ip' => request()->ip(),
            'user' => auth()->user()->id ?? null
        ]);
        $video->activity()->attach($newActivity);
        $video->save();
        return $this->video = $video;

    }


    public function inlistAction(Video $video)
    {

        $newActivity = Activity::create([
            'inlist' => true,
            'ip' => request()->ip(),
            'user' => auth()->user()->id ?? null
        ]);
        $video->activity()->attach($newActivity);
        $video->save();
        return $this->video = $video;

    }





    public function render()
    {
        return view('livewire.mintreu.card.video-card')->with('video',$this->video);
    }
}
