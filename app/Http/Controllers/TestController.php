<?php

namespace App\Http\Controllers;

use App\Helpers\Themes\ThemeWidget;
use App\Models\System\Theme\Theme;

use App\Models\System\Theme\ThemePage;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index()
    {

        $theme = Theme::find(1);

        $indexPage = $theme->pages()->firstWhere('type',ThemePage::INDEX_PAGE);

        $indexPage->widgets()->create([
            'title' => 'New Widget Name',
            'component' => 'App\Http\Livewire\Mintreu\Widgets\FullWidthSlider',
            'attributes' => [
               [ 'type' => 'video',
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



    }








}
