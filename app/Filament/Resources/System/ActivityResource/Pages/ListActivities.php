<?php

namespace App\Filament\Resources\System\ActivityResource\Pages;

use App\Filament\Resources\System\ActivityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActivities extends ListRecords
{
    protected static string $resource = ActivityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
