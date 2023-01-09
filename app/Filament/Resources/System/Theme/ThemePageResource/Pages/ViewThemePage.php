<?php

namespace App\Filament\Resources\System\Theme\ThemePageResource\Pages;

use App\Filament\Resources\System\Theme\ThemePageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewThemePage extends ViewRecord
{
    protected static string $resource = ThemePageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
