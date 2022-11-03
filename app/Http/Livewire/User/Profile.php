<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $user;
    public $name;
    public $avatar;

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;

    }


    public function updateName()
    {
        $this->user->update(['name' =>$this->name]);
    }


    public function updateAvatar()
    {
        $this->validate([
            'avatar' => 'image|max:1024', // 1MB Max
        ]);
//        $filename = $this->avatar->storeAs('public');
        auth()->user()->update([
            'avatar' => Str::replace('public/','',$this->avatar->store('public')),
        ]);
    }






    public function render()
    {
        return view('livewire.user.profile');
    }
}
