<?php

namespace App\Http\Livewire\all\Mintreu\Panel;

use App\Models\Setting;
use App\View\Components\Theme;
use Livewire\Component;

class Panel extends Component
{
    protected  $setting;
    protected  $content;

    public function mount()
    {
//        $this->setting = $setting->first();
//        $this->content = $content;

        $this->setting = Setting::where('default',true);
    }





    public function render()
    {

        return view('livewire.mintreu.panel.panel')->with('setting',$this->setting)->layout(Theme::class);
    }
}
