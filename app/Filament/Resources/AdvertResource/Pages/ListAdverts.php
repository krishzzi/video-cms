<?php

namespace App\Filament\Resources\AdvertResource\Pages;

use App\Filament\Resources\AdvertResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdverts extends ListRecords
{
    protected static string $resource = AdvertResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
