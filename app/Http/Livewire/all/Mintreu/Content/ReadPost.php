<?php

namespace App\Http\Livewire\all\Mintreu\Content;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class ReadPost extends Component
{

    public Post $post;
    public $newComment;
    protected $rules = [
        'newComment' => 'required|string|max:500',
    ];




    public function save()
    {
        $this->validate();
        $comment = new Comment();
        $comment->body = $this->newComment;
        $comment->user_id = auth()->user()->id;
        $this->post->comments()->save($comment);
        $this->post->save();

        $this->newComment = '';

    }

    public function render()
    {
        return view('livewire.mintreu.content.read-post');
    }
}
