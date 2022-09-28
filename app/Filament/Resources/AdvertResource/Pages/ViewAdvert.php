<?php

namespace App\Filament\Resources\AdvertResource\Pages;

use App\Filament\Resources\AdvertResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAdvert extends ViewRecord
{
    protected static string $resource = AdvertResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
