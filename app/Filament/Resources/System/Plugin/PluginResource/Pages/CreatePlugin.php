<?php

namespace App\Filament\Resources\System\Plugin\PluginResource\Pages;

use App\Filament\Resources\System\Plugin\PluginResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePlugin extends CreateRecord
{
    protected static string $resource = PluginResource::class;
}
