<?php

namespace App\Filament\Resources\System\Plugin\PluginResource\Pages;

use App\Filament\Resources\System\Plugin\PluginResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlugin extends EditRecord
{
    protected static string $resource = PluginResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
