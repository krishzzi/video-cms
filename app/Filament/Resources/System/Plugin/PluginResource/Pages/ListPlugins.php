<?php

namespace App\Filament\Resources\System\Plugin\PluginResource\Pages;

use App\Filament\Resources\System\Plugin\PluginResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlugins extends ListRecords
{
    protected static string $resource = PluginResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
