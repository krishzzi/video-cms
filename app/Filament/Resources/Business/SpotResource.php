<?php

namespace App\Filament\Resources\Business;

use App\Filament\Resources\Business\SpotResource\Pages;
use App\Filament\Resources\Business\SpotResource\RelationManagers;
use App\Models\Business\Spot;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpotResource extends Resource
{
    protected static ?string $model = Spot::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Fieldset::make('Advert Information')
                    ->schema([

                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),

                        Forms\Components\Fieldset::make('Private Advert Info')->schema([

                            Forms\Components\Toggle::make('is_private')
                                ->label(__('This is a Private Spot'))
                                ->required(),
                            Forms\Components\TextInput::make('target_url')
                                ->columnSpanFull()
                                ->maxLength(255),

                            Forms\Components\FileUpload::make('target_banner')
                                ->image()
                                ->columnSpanFull(),

                            Forms\Components\TextInput::make('target_views')
                                ->minValue(1)
                                ->maxValue(9999999)
                                ->integer(),

                            Forms\Components\TextInput::make('cost_per_view')
                                ->minValue(0)
                                ->maxValue(100000)
                                ->integer(),

                        ])->columns(2)->columnSpanFull(),

                        Forms\Components\Textarea::make('code')
                            ->columnSpanFull()
                            ->maxLength(65535),

                        Forms\Components\Select::make('status')
                            ->options(Spot::SPOT_STATUS)
                            ->required(),

                        Forms\Components\Select::make('alignment')
                            ->options(Spot::SPOT_ALIGNMENT)
                            ->required(),

                        Forms\Components\Toggle::make('is_modal')
                            ->required(),

                        Forms\Components\Toggle::make('active')
                            ->required(),

                    ])->columns(2),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\IconColumn::make('is_private')
                    ->boolean(),
                Tables\Columns\TextColumn::make('target_url'),
                Tables\Columns\TextColumn::make('target_banner'),
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('expire_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('target_views'),
                Tables\Columns\TextColumn::make('total_views'),
                Tables\Columns\TextColumn::make('alignment'),
                Tables\Columns\IconColumn::make('is_modal')
                    ->boolean(),
                Tables\Columns\TextColumn::make('cost_per_view'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListSpots::route('/'),
            'create' => Pages\CreateSpot::route('/create'),
            'view' => Pages\ViewSpot::route('/{record}'),
            'edit' => Pages\EditSpot::route('/{record}/edit'),
        ];
    }
}
