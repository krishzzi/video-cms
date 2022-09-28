<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;
use Illuminate\View\View;

class Theme extends Component
{
    public $setting;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($setting)
    {
        $this->setting = $setting;

     //   dd("ddss");

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('theme');
    }




}
