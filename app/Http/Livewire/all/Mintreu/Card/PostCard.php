<?php

namespace App\Http\Livewire\all\Mintreu\Card;

use App\Models\mix\sActivity;
use App\Models\Post;
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



        $newActivity = sActivity::create([
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

        $newActivity = sActivity::create([
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
