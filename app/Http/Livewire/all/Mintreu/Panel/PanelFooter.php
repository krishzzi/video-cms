<?php

namespace App\Http\Livewire\all\Mintreu\Panel;

use App\Models\Page;
use Livewire\Component;

class PanelFooter extends Component
{


    public $policies;
    public $aboutUs;
    private  $settings;


    public function mount($setting)
    {
//        dd($setting);
        $this->setting = $setting;
        $allPolicies = Page::where('status',true)->orderBy('priority')->get();
        $this->aboutUs = $allPolicies->firstWhere('slug','about-us');
        $this->policies = $allPolicies->where('slug','!=','about-us');
    }




    public function render()
    {
        return view('livewire.mintreu.panel.panel-footer')->with('setting',$this->settings);
    }
}
