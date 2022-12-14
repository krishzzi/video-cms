<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\Actions;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;





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

                    TextInput::make('password')
                        ->inlineLabel()
                        ->columnSpan(2)
                        ->required(),


                    Toggle::make('status')->default(true),



                ])->columns(4),



            ]);
    }




    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['password'] = Hash::make($data['password']);
        return parent::mutateFormDataBeforeCreate($data); // TODO: Change the autogenerated stub
    }


}
