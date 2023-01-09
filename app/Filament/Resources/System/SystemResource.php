<?php

namespace App\Filament\Resources\System;

use App\Filament\Resources\System\SystemResource\Pages;
use App\Filament\Resources\System\SystemResource\RelationManagers;
use App\Models\System\System;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SystemResource extends Resource
{
    protected static ?string $model = System::class;
    protected static ?string $navigationGroup = 'System';
    protected static ?string $pluralLabel = 'System';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ThemesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\SystemGallery::route('/'),
            'list' => Pages\ListSystems::route('/list'),
            'create' => Pages\CreateSystem::route('/create'),
            'edit' => Pages\EditSystem::route('/{record}/edit'),
        ];
    }
}
