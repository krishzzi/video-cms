<?php

namespace App\Filament\Resources\System\Theme\ThemeResource\RelationManagers;

use App\Filament\Resources\System\Theme\ThemePageResource;
use App\Models\System\Theme\ThemePage;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PagesRelationManager extends RelationManager
{
    protected static string $relationship = 'pages';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('FrontPage Information')->schema([

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
                        ->columnSpan(2)
                        ->maxLength(255),

                    Forms\Components\Select::make('type')
                        ->options(ThemePage::PAGE_OPTIONS)
                        ->required(),

                    Forms\Components\TextInput::make('view')
                        ->columnSpanFull()
                        ->required(),

                    Forms\Components\TextInput::make('query')
                        ->columnSpanFull()
                        ->required(),

                    Forms\Components\Toggle::make('is_redirect')
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            self::$hasRedirect = $state;
                        }),

                    Forms\Components\TextInput::make('redirect')
                        ->label(__('Redirect To'))->visible(function (){
                            return self::$hasRedirect;
                        }),


                    Forms\Components\Toggle::make('status')
                        ->required(),

                    Forms\Components\KeyValue::make('features')->columnSpanFull(),


                ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\ToggleColumn::make('status')->disabled(function (Model $record){
                    return $record->is_default;
                }),
                Tables\Columns\TextColumn::make('type')->formatStateUsing(function (string $state){
                    return ThemePage::PAGE_OPTIONS[$state];
                })
            ])
            ->filters([
                //
            ])
            ->headerActions([
               // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\Action::make('Edit')->url(function (Model $record){
                    return ThemePageResource::getUrl('edit',$record->id);
                }),
//                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->disabled(function (Model $record){
                    return $record->is_default;
                }),
            ])
            ->bulkActions([
               // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
