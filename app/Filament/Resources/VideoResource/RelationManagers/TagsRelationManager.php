<?php

namespace App\Filament\Resources\VideoResource\RelationManagers;

use Closure;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class TagsRelationManager extends RelationManager
{
    protected static string $relationship = 'tags';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make(__('Information'))->schema([
                    TextInput::make('name')
                        ->reactive()
                        ->afterStateHydrated(function (TextInput $component, $state) {
                            $component->state(Str::slug($state));
                        })
                        ->dehydrateStateUsing(fn ($state) => Str::slug($state))
                        ->unique()
                        ->label(__('Publishing Url will be'))
                        ->prefix(config('app.url').'/search/')
                        ->minLength(3)
                        ->maxLength(255)
                        ->columnSpan(2)
                        ->required(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('updated_at')->label(__('Modify On'))->since(),
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
