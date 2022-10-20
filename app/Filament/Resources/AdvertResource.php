<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertResource\Pages;
use App\Filament\Resources\AdvertResource\RelationManagers;
use App\Models\Advert;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvertResource extends Resource
{
    protected static ?string $model = Advert::class;
    protected static ?string $navigationGroup = 'Configure';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Fieldset::make('General')->schema([

                    Forms\Components\TextInput::make('name')->columnSpan(2),
                    Forms\Components\Select::make('provider')
                        ->options([
                            'google' => 'Google',
                            'private' => 'Private'
                        ])
                        ->columnSpan(1)
                        ->required(),

                    Radio::make('position')
                        ->options([
                            'right' => 'Right',
                            'middle' => 'Middle',
                            'left' => 'Left',

                        ])
                        ->columnSpan(1)

                        ->required(),

                    Radio::make('type')
                        ->options([
                            'block' => 'Block',
                            'fullscreen' => 'Full Screen',
                            'popup' => 'Pop Up'
                        ])
                        ->columnSpan(1)

                        ->required(),

                    DateTimePicker::make('expire_at')
                        ->label(__('Expire On'))

                        ->required(),

                ])->columns(3),



                Forms\Components\Fieldset::make('Options')
                    ->columns(3)
                    ->schema([

                        TextInput::make('target_url')
                            ->label(__('Target Url'))
                            ->columnSpan(3)
                            ->url()
                            ->nullable()
                            ->hint('Set A Full Url As Target Location'),


                        FileUpload::make('target_banner')
                            ->columnSpan(2)
                            ->disk('public')
                            ->nullable()
                            ->imageResizeTargetWidth(1000)
                            ->imageResizeTargetHeight(900)
                            ->image(),

                        TextInput::make('target_views')
                            ->nullable()
                            ->numeric()
                            ->minValue(0),

                        Forms\Components\Textarea::make('code')
                            ->nullable()
                            ->columnSpan(3)
                            ->maxLength(1000),



                    ]),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('provider'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('expire_at')->since(),
                Tables\Columns\TextColumn::make('target_views'),
                TextColumn::make('activity_count')->label(__('Completed Views'))->counts('activity'),
                Tables\Columns\BooleanColumn::make('finish')->disableClick(),
                Tables\Columns\BooleanColumn::make('status'),
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
            RelationManagers\ActivityRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdverts::route('/'),
            'create' => Pages\CreateAdvert::route('/create'),
            'view' => Pages\ViewAdvert::route('/{record}'),
            'edit' => Pages\EditAdvert::route('/{record}/edit'),
        ];
    }
}
