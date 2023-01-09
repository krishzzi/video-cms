<?php

namespace App\Filament\Resources\System\Theme\ThemeResource\Pages;


use App\Filament\Resources\System\Theme\ThemeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTheme extends EditRecord
{
    protected static string $resource = ThemeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\Action::make('ThemeEditor')->icon('heroicon-s-pencil')->label('Theme Editor')->action('gotoThemeEditor')
        ];
    }


    public function gotoThemeEditor()
    {
        return redirect()->to(ThemeResource::getUrl('editor'));
    }


}
