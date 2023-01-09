<?php

namespace App\Filament\Resources\System\Theme;

use App\Filament\Resources\System\Theme\WidgetResource\Pages;
use App\Filament\Resources\System\Theme\WidgetResource\RelationManagers;
use App\Models\System\Theme\Widget;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WidgetResource extends Resource
{
    protected static ?string $model = Widget::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('theme_page_id')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('component')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('attributes'),
                Forms\Components\Toggle::make('status')
                    ->required(),
                Forms\Components\Textarea::make('features'),
                Forms\Components\TextInput::make('priority')
                    ->required(),
                Forms\Components\Toggle::make('is_default')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('theme_page_id'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('component'),
                Tables\Columns\TextColumn::make('attributes'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('features'),
                Tables\Columns\TextColumn::make('priority'),
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
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWidgets::route('/'),
            'create' => Pages\CreateWidget::route('/create'),
            'view' => Pages\ViewWidget::route('/{record}'),
            'edit' => Pages\EditWidget::route('/{record}/edit'),
        ];
    }    
}
