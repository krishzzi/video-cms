<?php

namespace App\Http\Livewire\Mintreu\Auth\Pages;

use App\View\Components\Mintreu\Themes\Thirdparty\StreamIt\StreamIt;
use Livewire\Component;
use Mintreu\LaravelLayout\View\Themes\TallTheme;

class LoginPage extends Component
{
    public function render()
    {
        return view('livewire.mintreu.auth.pages.login-page')->layout(StreamIt::class);
    }
}
