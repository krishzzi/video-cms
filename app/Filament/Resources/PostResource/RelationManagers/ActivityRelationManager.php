<?php

namespace App\Filament\Resources\PostResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivityRelationManager extends RelationManager
{
    protected static string $relationship = 'activity';

    protected static ?string $recordTitleAttribute = 'ip';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ip')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ip')->toggleable(),
                Tables\Columns\TextColumn::make('user_id')->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\BooleanColumn::make('view')->sortable()->toggleable(),
                Tables\Columns\BooleanColumn::make('like')->toggleable(),
                Tables\Columns\BooleanColumn::make('share')->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\BooleanColumn::make('inlist')->toggleable()->toggledHiddenByDefault(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
              //  Tables\Actions\CreateAction::make(),
            ])
            ->actions([
//                Tables\Actions\ViewAction::make(),
//                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
