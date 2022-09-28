<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use App\Helpers\Grabber;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Throwable;

class CreateVideo extends CreateRecord
{
    protected static string $resource = VideoResource::class;
    public $data;


    /**
     * @return string
     */
    protected function getFormStatePath(): string
    {
        return 'data';
    }


    protected function getFormSchema(): array
    {

        return [

            TextInput::make('url')
                ->prefix("https://www.youtube.com/watch?v=")
                ->required(),

        ];

    }


    /**
     * @throws Throwable
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $grabber = new Grabber($data['url']);
        return $grabber->get();
    }







}
