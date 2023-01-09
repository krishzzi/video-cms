<?php

namespace App\Filament\Resources\Business\SpotResource\Pages;

use App\Filament\Resources\Business\SpotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpot extends EditRecord
{
    protected static string $resource = SpotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
