<?php

namespace App\Filament\Resources\System\SystemResource\Pages;

use App\Filament\Resources\System\SystemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSystems extends ListRecords
{
    protected static string $resource = SystemResource::class;

    protected function getActions(): array
    {
        return [
           // Actions\CreateAction::make(),
            Actions\Action::make('Home')->action('redirectHome'),
        ];
    }

    public function redirectHome()
    {
        return redirect()->to($this->getResource()::getUrl('index'));
    }


}
