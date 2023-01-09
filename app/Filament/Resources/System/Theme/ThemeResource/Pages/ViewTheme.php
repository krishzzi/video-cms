<?php

namespace App\Filament\Resources\System\Theme\ThemeResource\Pages;

use App\Filament\Resources\System\Theme\ThemeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTheme extends ViewRecord
{
    protected static string $resource = ThemeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
