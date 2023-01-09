<?php

namespace App\Http\Livewire\Mintreu\Auth\Pages;

use Livewire\Component;
use Mintreu\LaravelLayout\View\Themes\TallTheme;

class RegisterPage extends Component
{
    public function render()
    {
        return view('livewire.mintreu.auth.pages.register-page')->layout(TallTheme::class);
    }
}
