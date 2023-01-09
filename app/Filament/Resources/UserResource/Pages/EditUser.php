<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\Actions;
use Filament\Resources\Form;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('User Information')->schema([

                    TextInput::make('name')
                        ->columnSpanFull()
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('email')
                        ->columnSpanFull()
                        ->maxLength(255)
                        ->required(),
                    Toggle::make('status')->default(true),
                ])->columns(2),
            ]);
    }



}
