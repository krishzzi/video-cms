<?php

namespace App\Filament\Resources\System\SystemResource\Pages;

use App\Filament\Resources\System\SystemResource;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Artisan;

class EditSystem extends EditRecord
{
    protected static string $resource = SystemResource::class;

    protected function getActions(): array
    {
        return [
          //  Actions\DeleteAction::make(),
        ];
    }

    public  function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('General Information')
                    ->schema([

                        TextInput::make('name')->required(),

                        Select::make('theme')->options([
                            'stream' => 'Steam',
                        ])->required(),

                        Textarea::make('header')
                            ->columnSpan(1)
                            ->nullable(),

                        Textarea::make('footer')
                            ->columnSpan(1)
                            ->nullable(),

                        TextInput::make('contact_us')
                            ->label(__('Contact Us'))
                            ->columnSpan(1)
                            ->required()
                            ->maxLength(100),

                        Radio::make('age_restrict')
                            ->inline()
                            ->label(__('Age Restriction'))
                            ->options([
                                true => 'Yes',
                                false => 'No'
                            ])
                            ->default(false),


                    ])
                    ->columns(2),



                Fieldset::make(__('TuneUp Application Manually'))->schema([

                    Toggle::make('optimization')
                        ->label(__('App Optimize'))
                        ->reactive()
                        ->afterStateUpdated(function ($state) {
                            if($state)
                            {

                                Artisan::call('optimize:clear');
                                Notification::make()
                                    ->title('Optimization Done Successfully')
                                    ->success()
                                    ->send();
                            }

                        }),



                    Toggle::make('img_optimize')->label(__('Storage Optimize'))
                        ->reactive()
                        ->afterStateUpdated(function ($state) {
                            if($state)
                            {
                                rmdir(public_path('storage'));
                                Artisan::call('storage:link');
                                if(dir(public_path('storage')))
                                {
                                    Notification::make()
                                        ->title('Image Path Refresh Successfully')
                                        ->success()
                                        ->send();
                                }
                            }

                        }),



                    Toggle::make('reset')->label(__('Reset Everything'))
                        ->reactive()
                        ->afterStateUpdated(function ($state) {
                            if($state)
                            {

                                Artisan::call('app:install');
                                Notification::make()
                                    ->title('Application Reset Successfully')
                                    ->success()
                                    ->send();
                            }

                        }),


                ])->columns(3),



                Fieldset::make('Seo Info')->schema([
                    FileUpload::make('logo')
                        ->columnSpan(1)
                        ->image(),

                    Repeater::make('meta')->label(__('Meta Information'))->schema([
                        TextInput::make('key'),
                        Textarea::make('value'),
                    ])->columns(2),

                    Repeater::make('social')->label(__('Social Information'))->schema([
                        Select::make('name')->options([
                            'facebook' => 'Facebook',
                            'youtube' => 'Youtube',
                            'skype' => 'Skype',
                            'linkedin' => 'Linkedin',
                            'whatsapp' => 'Whatsapp'
                        ]),
                        TextInput::make('link')->url()->nullable(),
                    ])->columns(2),

                ])->columns(1)


            ]);
    }


}
