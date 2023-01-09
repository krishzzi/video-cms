<?php

namespace App\View\Components\Mintreu\Themes\Thirdparty\StreamIt;

use Illuminate\View\Component;

class StreamItDashboard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mintreu.themes.thirdparty.stream-it.stream-it-dashboard');
    }
}
