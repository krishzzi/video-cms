<?php

namespace App\Filament\Resources\System\ActivityResource\Pages;

use App\Filament\Resources\System\ActivityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActivity extends EditRecord
{
    protected static string $resource = ActivityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
