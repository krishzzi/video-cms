<?php

namespace App\Console\Commands\Tools\Support\Reset;

use App\Models\Setting;
use App\Models\System\System;
use App\Models\User;

trait hasDbReseter
{


    protected function resetDB()
    {
        $this->resetUser();
        $this->resetSystem();
        $this->resetTheme();
    }


    public function resetUser()
    {
        $user = User::where('is_admin',0)->delete();
    }

    private function resetSystem()
    {
        if (System::where('is_default',true)->count() > 1)
        {
            $systems = System::truncate();
        }else{
            $systems = System::where('is_default',0)->delete();
        }

        if (!System::all()->count())
        {
            $system = System::firstOrCreate([
                'name' => 'Video CMS'
            ]);
        }
    }

    private function resetTheme()
    {
        $system = System::firstWhere('is_default',true);
        if (is_null($system))
        {
            $this->resetSystem();
            $this->resetTheme();
        }else{




        }
    }


}
