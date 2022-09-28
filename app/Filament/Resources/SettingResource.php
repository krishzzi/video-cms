<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $navigationGroup = 'Configure';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('General Information')
                    ->schema([

                        TextInput::make('name')->required(),

                        Forms\Components\Select::make('theme')->options([
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


                Fieldset::make('Seo Info')->schema([
                    FileUpload::make('logo')
                        ->columnSpan(1)
                        ->image(),

                    Repeater::make('meta')->label(__('Meta Information'))->schema([
                        TextInput::make('key'),
                        Textarea::make('value'),
                    ])->columns(2),

                ])->columns(1)






            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\BooleanColumn::make('default')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            //'create' => Pages\CreateSetting::route('/create'),
            'view' => Pages\ViewSetting::route('/{record}'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
