<?php

namespace App\Filament\Resources\System\Plugin;

use App\Filament\Resources\System\Plugin\PluginResource\Pages;
use App\Filament\Resources\System\Plugin\PluginResource\RelationManagers;
use App\Models\System\Plugin\Plugin;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PluginResource extends Resource
{
    protected static ?string $model = Plugin::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('command')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('status')
                    ->required(),
                Forms\Components\DateTimePicker::make('last_use'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('command'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('last_use')
                    ->dateTime(),
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
            'index' => Pages\ListPlugins::route('/'),
            'create' => Pages\CreatePlugin::route('/create'),
            'view' => Pages\ViewPlugin::route('/{record}'),
            'edit' => Pages\EditPlugin::route('/{record}/edit'),
        ];
    }    
}
