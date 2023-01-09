<?php

namespace App\Filament\Resources\System\Plugin\PluginResource\Pages;

use App\Filament\Resources\System\Plugin\PluginResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Artisan;

class ViewPlugin extends ViewRecord
{
    protected static string $resource = PluginResource::class;

    protected function getActions(): array
    {
        return [
//            Actions\EditAction::make(),
            Actions\Action::make('run')->action('runCommand'),
        ];
    }

    protected function getTitle(): string
    {
        return 'Plugin- '.ucfirst($this->record->name);
    }

    public function runCommand()
    {



        if (array_key_exists($this->record->command,Artisan::all()))
        {

            if (Artisan::call($this->record->command))
            {
                Notification::make()
                    ->title('Run successfully')
                    ->success()
                    ->duration(5000)
                    ->send();
            }else{
                Notification::make()
                    ->title('ReInstall Plugin')
                    ->danger()
                    ->duration(5000)
                    ->send();
            }
        }else{
            Notification::make()
                ->title('InActivate Plugin')
                ->danger()
                ->duration(5000)
                ->send();
        }

    }
}
