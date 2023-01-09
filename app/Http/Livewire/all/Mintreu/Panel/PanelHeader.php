<?php

namespace App\Http\Livewire\all\Mintreu\Panel;

use Livewire\Component;

class PanelHeader extends Component
{

    private $setting;

    public function mount($setting)
    {
        $this->setting = $setting;
    }


    public function render()
    {
        return view('livewire.mintreu.panel.panel-header')->with('setting',$this->setting);
    }
}
