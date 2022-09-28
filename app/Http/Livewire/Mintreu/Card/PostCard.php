<?php

namespace App\Http\Livewire\Mintreu\Card;

use App\Models\Activity;
use App\Models\Post;
use App\Models\Video;
use Livewire\Component;

class PostCard extends Component
{



    private $post;

    public function mount($content)
    {
        $this->post = $content;

    }


    public function likeAction(Post $post)
    {



        $newActivity = Activity::create([
            'like' => true,
            'ip' => request()->ip(),
            'user' => auth()->user()->id ?? null
        ]);
        $post->activity()->attach($newActivity);
        $post->save();
        return $this->post = $post;

    }


    public function inlistAction(Post $post)
    {

        $newActivity = Activity::create([
            'inlist' => true,
            'ip' => request()->ip(),
            'user' => auth()->user()->id ?? null
        ]);
        $post->activity()->attach($newActivity);
        $post->save();
        return $this->post = $post;

    }


    public function render()
    {
        return view('livewire.mintreu.card.post-card')->with('post',$this->post);
    }
}
