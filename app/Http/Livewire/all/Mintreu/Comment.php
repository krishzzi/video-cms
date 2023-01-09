<?php

namespace App\Http\Livewire\all\Mintreu;

use Livewire\Component;

class Comment extends Component
{

    public \App\Models\Comment $comment;
    private $allComments;
    private $currentModel;

//    protected $rules = [
//        'comment.body' => 'required|string|max:500',
//    ];


    public function mount($model)
    {
        $this->currentModel = $model;
        $this->allComments = $model->comments;

    }


    public function save()
    {
        $this->validate();


        $this->comment->save();
        $this->currentModel->comments()->attach($this->comment);
        $this->currentModel->save();

    }



    public function render()
    {
        return view('livewire.mintreu.comment')->with('allComments',$this->allComments);
    }
}
