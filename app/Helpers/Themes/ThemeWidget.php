<?php

namespace App\Helpers\Themes;

use App\Models\Post;
use App\Models\System\Theme\Theme;
use App\Models\Video;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class ThemeWidget
{


    public function __construct()
    {
    }

    public static function widgets(Theme $theme)
    {
        $layout = $theme->layout;
        if (class_exists($layout))
        {
            $instance = new $layout();
            return $instance->supportedWidgets();
        }
    }

    public static function widgetsAttributes(Theme $theme)
    {
        $layout = $theme->layout;
        if (class_exists($layout))
        {
            $instance = new $layout();
            return $instance->getSupportedWidgetsAttribute();
        }
    }



    public static function getFormComponents(Theme $theme,?string $component=null)
    {

        if ($component)
        {
            $layout = $theme->layout;
            if (class_exists($layout))
            {
                $instance = new $layout();
                $attributes =  $instance->getSupportedWidgetsAttribute();
            }

            $currentAttribute = $attributes[$component];

            return self::loadFields($currentAttribute);
        }else{
            return [];
        }

    }

    private static function loadFields(mixed $currentAttribute)
    {
        $schemaBag = [];
        foreach (array_values($currentAttribute) as $attr)
        {

            if ($attr == 'title')
            {
                $schemaBag[] = TextInput::make('title')
                    ->required()
                    ->maxLength(60)
                    ->columnSpanFull()
                    ->placeholder(__('Enter Title'));


            }elseif($attr == 'type')
            {
                $schemaBag[] = Select::make('type')
                    ->options([
                    'video' => 'Video',
                    'post' => 'Post',
                    ])
                    ->default('video')
                    ->reactive()
                    ->required()
                    ->columnSpanFull();


            }elseif ($attr == 'where')
            {
                $schemaBag[] =  Select::make('where')
                    ->label(__('Filter'))
                    ->required()
                    ->options([
                        'is_suggestion' => 'By Suggestion',
                        'is_upcoming' => 'By Upcoming',
                        'is_slider' => 'By Slider',
                    ])->columnSpanFull();

                $schemaBag[] =  Select::make('where_status')
                    ->label(__('Filter'))
                    ->required()
                    ->default(0)
                    ->options([
                        1 => 'True',
                        0 => 'False',
                    ])
                    ->columnSpanFull();


            }elseif ($attr == 'limit')
            {
                $schemaBag[] =  TextInput::make('limit')
                                ->integer(true)
                                ->minValue(12)
                                ->maxValue(120)
                                ->required()
                                ->columnSpanFull();


            }elseif($attr == 'latest'){
                $schemaBag[] =  Select::make('latest')
                    ->label(__('Filter BY Latest'))
                    ->default('created_at')
                    ->options([
                        'update_at' => 'Modified Date',
                        'created_at' => 'Created Date',
                        'views' => 'Most Popular',
                    ])->columnSpanFull();


            }elseif ($attr == 'custom')
            {
                $schemaBag[] =  Select::make('custom')
                    ->label(function (\Closure $get){
                        return $get('type') == 'video' ? __('Video Gallery') : __('Post Gallery');
                    })
                    ->multiple()
                    ->default([])
                    ->options(function (\Closure $get){
                        if ($get('type') == 'video')
                        {
                            return Video::where('status',true)->pluck('title','id');
                        }else{
                            return Post::where('status',true)->pluck('title','id');
                        }
                    })
                    ->columnSpanFull();
            }

        }
        return $schemaBag;
    }


}
