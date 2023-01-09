<?php

namespace Database\Seeders;


use App\Models\Post;
use App\Models\System\Plugin\Plugin;
use App\Models\System\System;

use App\Models\System\Theme\Theme;
use App\Models\System\Theme\ThemePage;
use App\Models\Video;
use Database\Seeders\Support\hasCategorySeeder;
use Database\Seeders\Support\hasVideoSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ApplicationSeeder extends Seeder
{
    use hasVideoSeeder,hasCategorySeeder;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->resetSystem();
        $this->resetPlugins();
        $this->seedDemoCategories();
        $this->seedDummyVideos();

        $this->call([
           //VideoSeeder::class,
        ]);
        Post::factory(5)->create();
        $this->resetTheme();
    }


    private function resetSystem()
    {
        if (System::where('is_default',true)->count() > 1)
        {
            $systems = System::truncate();
        }else{
            $systems = System::where('is_default',0)->delete();
        }

        if (!System::all()->count())
        {
            $system = System::firstOrCreate([
                'name' => 'Video CMS',
                'is_default' => true,
                'is_valid' => true,
            ]);
        }
    }


    private function resetTheme()
    {
        $system = System::find(1);
        $hasVideo = Video::all()->count() > 1;

        $theme = $system->themes()->create([
            'name' => 'StreamIt',
            'slug' => Str::slug('StreamIt'),
            'is_active' => true,
            'status' => true,
            'is_default' => true,
            'layout' => 'App\View\Components\Mintreu\Themes\Thirdparty\StreamIt\StreamIt',

        ]);

        // Theme Pages

        $IndexPage = $theme->pages()->create([
            'name' => 'HomePage',
            'slug' => Str::slug('HomePage'),
            'status' => true,
            'page'  => $theme->slug.'.index-page',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::INDEX_PAGE,
            'is_default' => true,
        ]);


        $IndexPage->widgets()->create([
            'title' => 'Big Slider',
            'component' => 'App\Http\Livewire\Mintreu\Widgets\FullWidthSlider',
            'priority' => 1,
            'is_default' => true,
            'status' => true,
            'attributes' => [
                [
                    'type' => $hasVideo ? 'video' : 'post',
                    'limit' => 12,
                    'latest' => 'created_at',
                    'where_status' => 1,
                    'where' => 'is_upcoming'
                ],
            ],
            'features' => [
                ['text_color' => '#FFFFF',
                    'background_color' => '#TTTTT',
                    'border_color' => 'RED',
                ],
            ],
        ]);

        $IndexPage->widgets()->create([
            'title' => 'Slick Slider',
            'component' => 'App\Http\Livewire\Mintreu\Widgets\FullWidthSlider',
            'priority' => 2,
            'is_default' => false,
            'status' => true,
            'attributes' => [
                [
                    'title' => 'Upcoming Videos',
                    'type' => 'video',
                    'limit' => 12,
                    'latest' => 'created_at',
                    'where_status' => 1,
                    'where' => 'is_upcoming'
                ],
            ],
            'features' => [
                ['text_color' => '#FFFFF',
                    'background_color' => '#TTTTT',
                    'border_color' => 'RED',
                ],
            ],
        ]);


        $VideoListPage = $theme->pages()->create([
            'name' => 'VideoPage',
            'slug' => Str::slug('VideoPage'),
            'status' => true,
            'page'  => $theme->slug.'.videos-page',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::LIST_VIDEO_PAGE,
            'is_default' => true,
        ]);


        $VideoListPage->widgets()->create([
            'title' => 'New Widget Name',
            'component' => 'App\Http\Livewire\Mintreu\Widgets\CategoryWiseContentGallery',
            'priority' => 1,
            'is_default' => true,
            'status' => true,
            'attributes' => [
                [
                    'type' => 'video',
                    'limit' => 12
                ],
            ],
            'features' => [
                ['text_color' => '#FFFFF',
                    'background_color' => '#TTTTT',
                    'border_color' => 'RED',
                ],
            ],
        ]);



        $postListPage = $theme->pages()->create([
            'name' => 'PostPage',
            'slug' => Str::slug('PostPage'),
            'status' => true,
            'page'  => $theme->slug.'.posts-page',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::LIST_POST_PAGE,
            'is_default' => true,
        ]);

        $postListPage->widgets()->create([
            'title' => 'New Widget Name',
            'component' => 'App\Http\Livewire\Mintreu\Widgets\CategoryWiseContentGallery',
            'priority' => 1,
            'is_default' => true,
            'status' => true,
            'attributes' => [
                [
                    'type' => 'post',
                    'limit' => 12
                ],
            ],
            'features' => [
                ['text_color' => '#FFFFF',
                    'background_color' => '#TTTTT',
                    'border_color' => 'RED',
                ],
            ],
        ]);



        $viewVideoPage = $theme->pages()->create([
            'name' => 'VideoWatchPage',
            'slug' => Str::slug('VideoWatchPage'),
            'status' => true,
            'page'  => $theme->slug.'.view-video',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::VIEW_VIDEO_PAGE,
            'is_default' => true,
        ]);


        $viewVideoPage->widgets()->create([
            'title' => 'Video Player',
            'component' => 'App\Http\Livewire\Mintreu\Widgets\VideoPlayer',
            'priority' => 1,
            'is_default' => true,
            'status' => true,
            'attributes' => [
                [
                    'type' => 'video',
                    'limit' => 12
                ],
            ],
            'features' => [
                ['text_color' => '#FFFFF',
                    'background_color' => '#TTTTT',
                    'border_color' => 'RED',
                ],
            ],
        ]);




        $viewPostPage = $theme->pages()->create([
            'name' => 'PostWatchPage',
            'slug' => Str::slug('PostWatchPage'),
            'status' => true,
            'page'  => $theme->slug.'.view-post',
            'redirect' => null,
            'features' => [],
            'type' => ThemePage::VIEW_POST_PAGE,
            'is_default' => true,
        ]);

        $viewPostPage->widgets()->create([
            'title' => 'Story Reader',
            'component' => 'App\Http\Livewire\Mintreu\Widgets\StoryReader',
            'priority' => 1,
            'is_default' => true,
            'status' => true,
            'attributes' => [
                [
                    'type' => 'post',
                    'limit' => 12
                ],
            ],
            'features' => [
                ['text_color' => '#FFFFF',
                    'background_color' => '#TTTTT',
                    'border_color' => 'RED',
                ],
            ],
        ]);

    }







    private function resetPlugins()
    {
        $plugin = Plugin::create([
            'name' => 'Lab Reset',
            'command' => 'mintreu-app:reset',
            'status' => true,
        ]);
    }


}
