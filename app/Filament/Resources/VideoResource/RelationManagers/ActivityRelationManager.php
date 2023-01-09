<?php

namespace App\Filament\Resources\VideoResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\Request;

class ActivityRelationManager extends RelationManager
{
    protected static string $relationship = 'activity';

    protected static ?string $recordTitleAttribute = 'ip';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('ip')
                    ->default(function (Request $request){
                        return $request->ip();
                    })
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
                Tables\Columns\IconColumn::make('view')
                    ->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle')->sortable()->toggleable(),
                Tables\Columns\IconColumn::make('like')
                    ->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle')
                    ->toggleable(),
                Tables\Columns\IconColumn::make('share') ->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle')
                    ->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\IconColumn::make('inlist') ->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle')
                    ->toggleable()->toggledHiddenByDefault(),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                  Tables\Actions\CreateAction::make(),
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
