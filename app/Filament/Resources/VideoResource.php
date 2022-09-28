<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Video;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;
    protected static ?string $navigationGroup = 'Manage';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->label(__('Provided Thumbnail'))->disk('public')->toggleable()->width(200)->height(100),
                ImageColumn::make('display')->label(__('Custom Thumbnail'))->disk('public')->toggleable()->toggledHiddenByDefault()->width(200)->height(100),
                Tables\Columns\TextColumn::make('title')->limit(30)->toggleable(),
                Tables\Columns\TextColumn::make('slug')->toggleable()->toggledHiddenByDefault(),

                TextColumn::make('activity_count')->label(__('Views'))->counts('activity')->sortable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('comments_count')->label(__('Comments'))->counts('comments')->sortable()->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\ToggleColumn::make('in_slider')->label(__('As Slider'))->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ToggleColumn::make('in_suggestion')->label(__('As Suggestion'))->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ToggleColumn::make('is_upcoming')->label(__('As Upcoming'))->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('priority')->sortable()->toggleable(),
                TextColumn::make('updated_at')->since()->toggleable(),
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
            RelationManagers\CategoryRelationManager::class,
            RelationManagers\TagsRelationManager::class,
            RelationManagers\ActivityRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'view' => Pages\ViewVideo::route('/{record}'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
