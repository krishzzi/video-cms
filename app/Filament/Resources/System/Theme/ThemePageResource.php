<?php

namespace App\Filament\Resources\System\Theme;

use App\Filament\Resources\System\Theme\ThemePageResource\Pages;
use App\Filament\Resources\System\Theme\ThemePageResource\RelationManagers;
use App\Models\System\Theme\ThemePage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ThemePageResource extends Resource
{
    protected static ?string $model = ThemePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('theme_id')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('page')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('redirect')
                    ->maxLength(255),
                Forms\Components\Textarea::make('features'),
                Forms\Components\Toggle::make('status')
                    ->required(),
                Forms\Components\TextInput::make('type')
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_default')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('theme_id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('page'),
                Tables\Columns\TextColumn::make('redirect'),
                Tables\Columns\TextColumn::make('features'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\IconColumn::make('is_default')
                    ->boolean(),
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
            RelationManagers\WidgetsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListThemePages::route('/'),
            'create' => Pages\CreateThemePage::route('/create'),
            'view' => Pages\ViewThemePage::route('/{record}'),
            'edit' => Pages\EditThemePage::route('/{record}/edit'),
        ];
    }
}
