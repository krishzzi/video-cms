<?php

namespace App\Filament\Resources\System\Theme\WidgetResource\Pages;

use App\Filament\Resources\System\Theme\WidgetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWidgets extends ListRecords
{
    protected static string $resource = WidgetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
