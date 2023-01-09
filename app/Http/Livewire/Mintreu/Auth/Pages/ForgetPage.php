<?php

namespace App\Http\Livewire\Mintreu\Auth\Pages;

use Livewire\Component;
use Mintreu\LaravelLayout\View\Themes\TallTheme;

class ForgetPage extends Component
{
    public function render()
    {
        return view('livewire.mintreu.auth.pages.forget-page')->layout(TallTheme::class);
    }
}
