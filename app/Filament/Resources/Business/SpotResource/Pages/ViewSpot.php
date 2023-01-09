<?php

namespace App\Filament\Resources\Business\SpotResource\Pages;

use App\Filament\Resources\Business\SpotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSpot extends ViewRecord
{
    protected static string $resource = SpotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
