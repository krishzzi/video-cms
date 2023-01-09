<?php

namespace App\Filament\Resources\System\SystemResource\Pages;

use App\Filament\Resources\System\SystemResource;
use App\Filament\Resources\System\Theme\ThemeResource;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\Page;

class SystemGallery extends Page
{
    protected static string $resource = SystemResource::class;
    protected static ?string $slug = 'System';
    protected static ?string $title = 'System Statistics';

    protected static string $view = 'filament.resources.setting-resource.pages.setting-gallery';


    protected function getActions(): array
    {
        return [
            Action::make('Manage Settings')->action('redirectList'),
            Action::make('Themes')->action('redirectThemes'),
            Action::make('Logs')->action('redirectLogs'),
        ];
    }



    public function redirectList()
    {
        return redirect()->to($this->getResource()::getUrl('edit',1));
    }


    public function redirectLogs()
    {
        return redirect()->route('filament.pages.logs');
    }

    public function redirectThemes()
    {
        return redirect()->to(ThemeResource::getUrl('index'));
    }

}
