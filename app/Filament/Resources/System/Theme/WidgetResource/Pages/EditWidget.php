<?php

namespace App\Filament\Resources\System\Theme\WidgetResource\Pages;

use App\Filament\Resources\System\Theme\WidgetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWidget extends EditRecord
{
    protected static string $resource = WidgetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
