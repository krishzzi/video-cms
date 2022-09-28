<?php

namespace App\Filament\Resources\AdvertResource\RelationManagers;

use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivityRelationManager extends RelationManager
{
    protected static string $relationship = 'activity';
    protected static ?string $pluralLabel = 'Advert Activities';

    protected static ?string $recordTitleAttribute = 'ip';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Info')->schema([

                    Select::make('user_id')
                        ->label(__('View by'))
                        ->nullable()
                        ->columnSpan(3)
                        ->options(function () {
                            return User::all()->pluck('name', 'id');
                        }),

                    Forms\Components\TextInput::make('ip')
                        ->label(__('IP Address'))
                        ->columnSpan(2)
                        ->maxLength(100)
                        ->afterStateHydrated(function (TextInput $component, $state) {
                            $component->state(request()->ip());
                        }),


                    Forms\Components\Toggle::make('view')
                        ->columnSpan(1)
                        ->default(false),



                ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ip'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
