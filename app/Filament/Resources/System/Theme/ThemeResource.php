<?php

namespace App\Filament\Resources\System\Theme;

use App\Filament\Resources\System\Theme\ThemeResource\Pages;
use App\Filament\Resources\System\Theme\ThemeResource\RelationManagers;
use App\Models\System\Theme\Theme;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ThemeResource extends Resource
{
    protected static ?string $model = Theme::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Fieldset::make('General Information')->schema([

                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->lazy()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug',Str::slug($state));
                        })
                        ->columnSpanFull()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('slug')
                        ->disabled()
                        ->columnSpanFull()
                        ->maxLength(255),

                    Forms\Components\Toggle::make('is_active')
                        ->required(),

                    Forms\Components\Toggle::make('status')
                        ->required(),



                    Repeater::make('appearance')->schema([

                        ColorPicker::make('navigation_color'),

                        ColorPicker::make('navigation_text'),

                        ColorPicker::make('footer_color'),

                        ColorPicker::make('footer_text'),

                        ColorPicker::make('primary_color'),

                        ColorPicker::make('secondary_color'),

                        ColorPicker::make('background_color'),


                    ])->defaultItems(1)
                        ->maxItems(1)
//                        ->disableItemCreation()
                        ->disableItemDeletion()
                        ->disableItemMovement()
                        ->columnSpanFull()
                        ->collapsible(false)
                        ->columns(2),

                ])->columns(2),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
//                Tables\Columns\TextColumn::make('appearance'),
//                Tables\Columns\TextColumn::make('layout'),
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
            RelationManagers\PagesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListThemes::route('/'),
            'editor' => Pages\ThemeEditor::route('/editor'),
            'create' => Pages\CreateTheme::route('/create'),
            'view' => Pages\ViewTheme::route('/{record}'),
            'edit' => Pages\EditTheme::route('/{record}/edit'),
        ];
    }
}
