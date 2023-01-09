<?php

namespace App\Http\Livewire\Mintreu\Dashboard\Pages;

use Livewire\Component;
use Mintreu\LaravelLayout\View\Themes\TallTheme;

class HistoryPage extends Component
{
    public function render()
    {
        return view('livewire.mintreu.dashboard.pages.history-page')->layout(TallTheme::class);
    }
}
