<?php

namespace App\Http\Livewire\Mintreu\Pages;

use App\Models\Business\Spot;
use Livewire\Component;

class ViewAdvert extends Component
{

    protected mixed $records = null;

    public function mount()
    {
       // $this->records = Spot::where('active',true)->where('status',Spot::SPOT_STATUS_PUBLISH)->where('total_views','<','target_views')->orderBy('created_at','asc')->get();

        $this->records = Spot::whereColumn('total_views','<','target_views')->where('status',Spot::SPOT_STATUS_PUBLISH)->where('active',true)->get();

    }




    public function render()
    {
        return view('livewire.mintreu.pages.view-advert')->with(['records' => $this->records]);
    }
}
