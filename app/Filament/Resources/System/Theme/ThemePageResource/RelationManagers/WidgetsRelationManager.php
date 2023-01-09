<?php

namespace App\Filament\Resources\System\Theme\ThemePageResource\RelationManagers;

use App\Helpers\Themes\ThemeWidget;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WidgetsRelationManager extends RelationManager
{
    protected static string $relationship = 'widgets';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Section Information')->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->columnSpan(2)
                        ->maxLength(255),

                    Forms\Components\TextInput::make('priority')
                        ->integer()
                        ->default(0)
                        ->maxValue(10)
                        ->minValue(1),



                    Forms\Components\Select::make('component')
                        ->label(__('Widgets'))
                        ->options(function (RelationManager $livewire){
                            return ThemeWidget::widgets($livewire->ownerRecord->theme);
                        })
                        ->columnSpan(2)
                        ->lazy()
//                    ->afterStateUpdated(function (\Closure $set,string $state){
////                        dd($state);
//                        $set('attributes',['type'=>'video','query' => 'groupBy']);
//                    })
//                    ->hidden(function (Model $record){
//                        return $record->is_default;
//                    })
                        ->required(),


                    Forms\Components\Repeater::make('attributes')
                        ->schema(function (RelationManager $livewire,\Closure $get){
                            return ThemeWidget::getFormComponents($livewire->ownerRecord->theme,$get('component'));
                        })
                        ->maxItems(1)
                        ->columns(2)
                        ->columnSpanFull(),


                    Repeater::make('features')->schema([
                        ColorPicker::make('text_color'),
                        ColorPicker::make('background_color'),
                        ColorPicker::make('border_color'),

                    ])->defaultItems(1)
                        ->maxItems(1)
//                        ->disableItemCreation()
                        ->disableItemDeletion()
                        ->disableItemMovement()
                        ->columnSpanFull()
                        ->collapsible(false)
                        ->columns(2),



                    Forms\Components\Toggle::make('status'),

                ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('priority'),
                Tables\Columns\ToggleColumn::make('status'),
                IconColumn::make('is_default')
                    ->label(__('Default'))
                    ->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()->label(__('New Widgets')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->disabled(function (Model $record){
                    return $record->is_default;
                }),
            ])
            ->bulkActions([
              //  Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
