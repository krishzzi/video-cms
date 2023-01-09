<?php

namespace Database\Seeders;

use App\Helpers\Themes\ThemeWidget;
use App\Models\Themes\Theme;
use App\Models\Themes\ThemePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $theme = Theme::create([
            'name' => 'StreamIt',
            'slug' => Str::slug('StreamIt'),
            'is_active' => true,
            'status' => true,
            'layout' => 'App\View\Components\Mintreu\Themes\Thirdparty\StreamIt\StreamIt',

        ]);

        $page = $theme->pages()->create([
            'name' => 'HomePage',
            'slug' => Str::slug('HomePage'),
            'status' => true,
            'page'  => $theme->slug.'.index-page',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::INDEX_PAGE,
            'is_default' => true,
        ]);


        $page = $theme->pages()->create([
            'name' => 'VideoPage',
            'slug' => Str::slug('VideoPage'),
            'status' => true,
            'page'  => $theme->slug.'.videos-page',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::LIST_VIDEO_PAGE,
            'is_default' => true,
        ]);


        $page = $theme->pages()->create([
            'name' => 'PostPage',
            'slug' => Str::slug('PostPage'),
            'status' => true,
            'page'  => $theme->slug.'.posts-page',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::LIST_POST_PAGE,
            'is_default' => true,
        ]);



        $page = $theme->pages()->create([
            'name' => 'VideoWatchPage',
            'slug' => Str::slug('VideoWatchPage'),
            'status' => true,
            'page'  => $theme->slug.'.view-video',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::VIEW_VIDEO_PAGE,
            'is_default' => true,
        ]);


        $page = $theme->pages()->create([
            'name' => 'PostWatchPage',
            'slug' => Str::slug('PostWatchPage'),
            'status' => true,
            'page'  => $theme->slug.'.view-post',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::VIEW_POST_PAGE,
            'is_default' => true,
        ]);





//        $widgetList = ThemeWidget::widgets($theme);
//
//
//        foreach ($widgetList as $widget => $nameWidget)
//        {
//            $block = $page->blocks()->create([
//                'title' => $nameWidget,
//                'component' => $widget,
//                'status' => true,
//                'priority' => 1,
//                'is_default' => false,
//            ]);
//        }



//        $block = $page->blocks()->create([
//                    'title' => 'Big Slider',
//                    'component' => "@livewire('mintreu.widgets.full-width-slider',['type'=> 'video'])",
//                    'status' => true,
//                    'priority' => 1,
//                    'is_default' => true,
//                ]);
//
//        $block = $page->blocks()->create([
//            'title' => 'Upcoming Videos',
//            'component' => "@livewire('mintreu.widgets.slick-slider',['type'=> 'video','title' => 'Upcoming Videos','query'=> null])",
//            'status' => true,
//            'priority' => 2,
//            'is_default' => false,
//        ]);
//
//        $block = $page->blocks()->create([
//            'title' => 'Upcoming Videos',
//            'component' => "@livewire('mintreu.widgets.slick-slider',['type'=> 'post','title' => 'Upcoming Posts','query'=> null])",
//            'status' => true,
//            'priority' => 2,
//            'is_default' => false,
//        ]);




//                    'attributes' => [
//                            'type' => 'video',
//                            'title' => 'UpComing Video'
//                            ]
//                        ],


    }
}
