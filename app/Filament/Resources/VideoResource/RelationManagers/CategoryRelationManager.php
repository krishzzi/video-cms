<?php

namespace App\Filament\Resources\VideoResource\RelationManagers;

use App\Models\Category;
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

class CategoryRelationManager extends RelationManager
{
    protected static string $relationship = 'category';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make(__('Information'))->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->columnSpan(2)
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug',Str::slug($state));
                        })
                        ->maxLength(255),

                    Forms\Components\Select::make('parent_id')
                        ->options(Category::where('parent_id','!=',null)->where('status',true)->orderBy('priority')->get()->pluck('name','id'))
                        ->columnSpan(2)
                        ->nullable(),

                    TextInput::make('slug')
                        ->unique()
                        ->label(__('Publishing Url will be'))
                        ->prefix(config('app.url').'/category/')
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
                Tables\Columns\TextColumn::make('slug')->searchable()->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\TextColumn::make('parent_id')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('priority'),
                Tables\Columns\ToggleColumn::make('status')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')->label(__('Modify On'))->since(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make(),
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
