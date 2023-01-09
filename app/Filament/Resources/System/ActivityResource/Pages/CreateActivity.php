<?php

namespace App\Filament\Resources\System\ActivityResource\Pages;

use App\Filament\Resources\System\ActivityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateActivity extends CreateRecord
{
    protected static string $resource = ActivityResource::class;
}
