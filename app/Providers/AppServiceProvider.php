<?php

namespace App\Providers;

use App\View\Components\Theme;
use Filament\Facades\Filament;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //



    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive('plugin', function (string $component) {
            return "@livewire('".$component."',[])";
        });


        Filament::serving(function () {
            // Using Vite
            Filament::registerViteTheme('resources/css/filament.css');
        });

        Filament::registerNavigationGroups([
            'Access',
            'Manage',
            'System',
        ]);

    }
}
