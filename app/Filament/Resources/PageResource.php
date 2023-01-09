<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;
    protected static ?string $navigationGroup = 'Access';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Fieldset::make('Information')->schema([
                    Forms\Components\TextInput::make('title')
                        ->lazy()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug',Str::slug($state));
                        })
                        ->afterStateHydrated(function (Closure $set, $state) {
                            $set('slug',Str::slug($state));
                        })
                        ->columnSpanFull(),

                    Forms\Components\TextInput::make('slug')->columnSpan(2),

                    Forms\Components\Toggle::make('redirect')
                        ->reactive()
                        ->default(false),

                    Forms\Components\TextInput::make('priority')
                        ->visible(function (Closure $get){
                            return !$get('redirect');
                        })
                        ->columnSpan(1),




                    Forms\Components\TextInput::make('redirect_url')
                        ->visible(function (Closure $get){
                            return $get('redirect');
                        })
                        ->columnSpanFull()
                        ->default(null),



                    TinyEditor::make('desc')
                        ->visible(function (Closure $get){
                            return !$get('redirect');
                        })
                        ->columnSpanFull(),

                ])->columns(3),






            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('priority'),
                Tables\Columns\TextColumn::make('created_at')->since(),


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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'view' => Pages\ViewPage::route('/{record}'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
