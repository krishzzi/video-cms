<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;
use App\Filament\Pages\MyAccount\Profile as MyAccountProfile;

class FilamentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerUserMenuItems([
                'account' => UserMenuItem::make()->url(MyAccountProfile::getUrl()),

            ]);
        });
    }
}
