<?php

namespace App\Filament\Resources\System\Theme\ThemePageResource\Pages;


use App\Filament\Resources\System\Theme\ThemePageResource;
use App\Models\System\Theme\ThemePage;
use Closure;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\Actions;
use Filament\Resources\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EditThemePage extends EditRecord
{
    protected static string $resource = ThemePageResource::class;

    public static bool $hasRedirect = false;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()->disabled(function (Model $record){
                return $record->is_default;
            }),
        ];
    }



    public  function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('FrontPage Information')->schema([

                    TextInput::make('name')
                        ->required()
                        ->lazy()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug',Str::slug($state));
                        })
                        ->columnSpanFull()
                        ->maxLength(255),

                    TextInput::make('slug')
                        ->disabled()
                        ->columnSpan(2)
                        ->maxLength(255),

                    Select::make('type')
                        ->options(ThemePage::PAGE_OPTIONS)
                        ->required(),

                    TextInput::make('page')
                        ->columnSpanFull()
                        ->disabled(function (Model $record){
                            return $record->is_default;
                        })
                        ->required(),



                    Toggle::make('is_redirect')
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            self::$hasRedirect = $state;
                        }),

                    TextInput::make('redirect')
                        ->label(__('Redirect To'))->visible(function (){
                            return self::$hasRedirect;
                        }),


                    Toggle::make('status')
                        ->required(),

                    Repeater::make('features')->schema([

                        ColorPicker::make('background_color')
                            ->default(null),

                    ])->defaultItems(1)->columnSpanFull()->columns(2),





                ])->columns(3),
            ]);
    }
}
