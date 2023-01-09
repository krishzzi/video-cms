<?php

namespace App\Filament\Resources\System;

use App\Filament\Resources\System\ActivityResource\Pages;
use App\Filament\Resources\System\ActivityResource\RelationManagers;
use App\Models\System\Activity;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivityResource extends Resource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id'),
                Forms\Components\Toggle::make('like')
                    ->required(),
                Forms\Components\TextInput::make('rate')
                    ->required(),
                Forms\Components\Toggle::make('inlist')
                    ->required(),
                Forms\Components\Toggle::make('share')
                    ->required(),
                Forms\Components\Toggle::make('view')
                    ->required(),
                Forms\Components\TextInput::make('ip')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('activity_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('activity_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\IconColumn::make('like')
                    ->boolean(),
                Tables\Columns\TextColumn::make('rate'),
                Tables\Columns\IconColumn::make('inlist')
                    ->boolean(),
                Tables\Columns\IconColumn::make('share')
                    ->boolean(),
                Tables\Columns\IconColumn::make('view')
                    ->boolean(),
                Tables\Columns\TextColumn::make('ip'),
                Tables\Columns\TextColumn::make('activity_type'),
                Tables\Columns\TextColumn::make('activity_id'),
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
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'view' => Pages\ViewActivity::route('/{record}'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }    
}
