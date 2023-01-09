<?php

namespace App\Filament\Resources\System\Theme\ThemeResource\Pages;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\System\SystemResource;
use App\Filament\Resources\System\Theme\ThemeResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThemes extends ListRecords
{
    protected static string $resource = ThemeResource::class;

    protected function getActions(): array
    {
        return [
//            Actions\CreateAction::make(),
            Actions\Action::make('gotoSetting')
                ->icon('heroicon-s-cog')
                ->iconPosition('before')
                ->label('Back To Setting')
                ->action('redirectSetting'),
            Actions\Action::make('AddTheme')
                ->icon('heroicon-s-document-text')
                ->label('Add Theme')->action('addNewTheme'),
            Actions\Action::make('ThemeEditor')
                ->label('Theme Editor')
                ->icon('heroicon-s-pencil')
                ->action('gotoThemeEditor')
        ];
    }

    public function redirectSetting()
    {
        return redirect()->to(SystemResource::getUrl('index'));
    }

    public function gotoThemeEditor()
    {
        return redirect()->to(ThemeResource::getUrl('editor'));
    }



    public function addNewTheme()
    {
        Notification::make()
            ->title('Your Account Not Verified')
            ->danger()
            ->duration(5000)
            ->send();

        Notification::make()
            ->title('Connect Your Account With Mintreu to unlock other features')
            ->body("<a href='#'>Click To Connect</a>")
            ->warning()
            ->duration(10000)
            ->send();
    }
}
