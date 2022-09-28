<?php

namespace App\Http\Livewire\Mintreu;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class CommentForm extends Component
{
    public \App\Models\Comment $comment;
    private Post|Video $model;
    private $allComments;

        protected $rules = [
        'comment.body' => 'required|string|max:500',
    ];


    public function mount(Post|Video $model)
    {
        $this->comment = new \App\Models\Comment();
        $this->model = $model;
        $this->allComments = $model->comments;

    }


    public function saveComment( $model,Request $request)
    {
        dd($model);
      $this->model = $model;
        $this->validate();

//        $comments = new Comment();
//        $comment->body = $request->input('body');
        $this->comment->user()->associate($request->user());

        $model->comments()->save($this->comment);



//        $this->model->comments->save($this->comment->body);
//
////        $this->comment->commentable_id = $model->id;
////        $this->comment->commentable_type = $model;
//        $this->comment->save();

    }


    public function render()
    {
        return view('livewire.mintreu.comment-form')->with('allComments',$this->allComments)->with('model',$this->model);
    }
}
