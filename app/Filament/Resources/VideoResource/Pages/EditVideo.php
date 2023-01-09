<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use Closure;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class EditVideo extends EditRecord
{
    protected static string $resource = VideoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }







    protected function getFormSchema(): array
    {

        return [



            Fieldset::make('Information')
                ->schema([

                    TextInput::make('title')
                        ->placeholder(__('Enter Video Title'))
                        ->maxLength(200)
                        ->minLength(3)
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug',Str::slug($state));
                        })

                        ->columnSpan(3)
                        ->required(),

                    TextInput::make('slug')
                        ->unique(ignoreRecord: true)
                        ->afterStateHydrated(function (Closure $get,TextInput $component) {

                            $component->state(Str::slug($get('title') ?? ''));
                        })
                        ->label(__('Publishing Url will be'))
                        ->prefix(config('app.url').'/watch-video/')
                        ->minLength(3)
                        ->maxLength(255)
                        ->required()->columnSpan(3),



                    TextInput::make('uploader')
                        ->columnSpan(2)
                        ->required(),

                    TextInput::make('video_code')
                        ->label(__('Video Code'))
                        ->columnSpan(1)
                        ->required()
                        ->disabled(),

                    TextInput::make('channel')
                        ->columnSpan(2)
                        ->required(),

                    TextInput::make('provider')
                        ->columnSpan(1)
                        ->required(),


                    Textarea::make('embed_code')
                        ->placeholder('Enter Youtube Video IFrame Code')
                        ->columnSpan(3)
                        ->required(),


                    Fieldset::make('Video Player')
                        ->schema([
                            TextInput::make('height')
                                ->minValue(250)
                                ->maxValue(2500)
                                ->columnSpan(1)
                                ->lazy()
                                ->numeric(),


                            TextInput::make('width')
                                ->minValue(350)
                                ->maxValue(3500)
                                ->columnSpan(1)
                                ->lazy()
                                ->numeric(),


                            Placeholder::make('ratio')
                                ->columnSpan(1)
                                ->content(function (Closure $get){
                                    return "Video Player Ratio : ". $get('height').':'.$get('width');
                                }),
                        ])->columns(3),


                    TinyEditor::make('desc')
                        ->placeholder(__('Enter Video Description'))
                        ->label(__('Description'))
                        ->columnSpan(3),

//                    RichEditor::make('desc')
//                        ->placeholder(__('Enter Video Description'))
//                        ->label(__('Description'))
//                        ->columnSpan(3),

                    Fieldset::make('Thumbnail')
                        ->schema([

                            FileUpload::make('display')
                                ->columnSpan(3)
                                ->image()
                                ->disk('public')
                                ->imageCropAspectRatio('16:9')
                                ->imageResizeTargetWidth('1920')
                                ->imageResizeTargetHeight('1080')
                                ,

                            TextInput::make('thumb_height')
                                ->minValue(250)
                                ->columnSpan(1)
                                ->numeric(),

                            TextInput::make('thumb_width')
                                ->minValue(350)
                                ->columnSpan(1)
                                ->numeric(),


                            Placeholder::make('ratio')
                                ->columnSpan(1)
                                ->content(function (Closure $get){
                                    return "Thumbnail Ratio : ". $get('thumb_height').':'.$get('thumb_width');
                                }),
                        ])
                        ->columns(3),

                    Fieldset::make('Manage')->columnSpan(3)->schema([
                        Toggle::make('status')->inline()->default(true)->columnSpan(1),
                        Toggle::make('is_upcoming')->label(__('Upcoming'))->inline()->default(true)->columnSpan(1),
                        Toggle::make('is_slider')->label(__('Slider'))->inline()->default(true)->columnSpan(1),
                        Toggle::make('is_suggestion')->label(__('Suggestion'))->inline()->default(true)->columnSpan(1),
                    ])->columns(4),

                ])
                ->columns(3),
        ];

    }









}
