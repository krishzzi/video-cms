<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationGroup = 'Access';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Fieldset::make('Information')
                    ->schema([



                        TextInput::make('title')
                            ->placeholder(__('Enter Story Title'))
                            ->maxLength(200)
                            ->minLength(3)
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state) {
                                $set('slug',Str::slug($state));
                            })
                            ->columnSpan(3)
                            ->required(),


                        Forms\Components\Select::make('font_size_title')->options([
                            'h1' => 'Heading 1',
                            'h2' => 'Heading 2',
                            'h3' => 'Heading 3',
                            'h4' => 'Heading 4',
                            'h5' => 'Heading 5',
                            'h6' => 'Heading 6',
                            'display-1' => 'Display 1',
                            'display-2' => 'Display 2',
                            'display-3' => 'Display 3',
                            'display-4' => 'Display 4',
                        ])->columnSpan(1),

                        TextInput::make('slug')
                            ->unique(ignoreRecord: true)
                            ->label(__('Publishing Url will be'))
                            ->afterStateHydrated(function (Closure $get,TextInput $component) {
                                $component->state(Str::slug($get('title') ?? ''));
                            })
                            ->prefix(config('app.url').'/read-story/')
                            ->minLength(2)
                            ->maxLength(255)
                            ->required()->columnSpan(3),




//                        Forms\Components\RichEditor::make('desc')
//                            ->label(__('Description'))
//                            ->columnSpan(3)
//                            ->required(),

                        TinyEditor::make('desc')
                            ->placeholder(__('Enter Video Description'))
                            ->label(__('Description'))
                            ->required()
                            ->columnSpan(3),


                        Forms\Components\Fieldset::make('Manage')->columnSpan(3)->schema([
                            Forms\Components\Toggle::make('status')->inline()->default(true)->columnSpan(1),
                            Forms\Components\Toggle::make('is_upcoming')->label(__('Upcoming'))->inline()->default(true)->columnSpan(1),
                            Forms\Components\Toggle::make('is_slider')->label(__('Slider'))->inline()->default(true)->columnSpan(1),
                            Forms\Components\Toggle::make('is_suggestion')->label(__('Suggestion'))->inline()->default(true)->columnSpan(1),
                        ])->columns(4),

                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('display'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('display')->toggleable(),
                Tables\Columns\TextColumn::make('title')->limit(30)->toggleable(),
                Tables\Columns\TextColumn::make('slug')->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('activity_count')->label(__('Views'))->counts('activity')->sortable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('comments_count')->label(__('Comments'))->counts('comments')->sortable()->toggleable()->toggledHiddenByDefault(),

                Tables\Columns\ToggleColumn::make('is_slider')->label(__('As Slider'))->sortable()->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ToggleColumn::make('is_suggestion')->label(__('As Suggestion'))->sortable()->toggleable()->toggledHiddenByDefault(),
                Tables\Columns\ToggleColumn::make('is_upcoming')->label(__('As Upcoming'))->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('priority')->sortable()->toggleable(),
                Tables\Columns\ToggleColumn::make('status')->toggleable(),
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
            RelationManagers\TagsRelationManager::class,
            RelationManagers\CategoryRelationManager::class,
            RelationManagers\ActivityRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
