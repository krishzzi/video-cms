<?php

namespace App\View\Components\Mintreu\Themes\Thirdparty\StreamIt;


use Illuminate\View\Component;

class StreamIt extends Component
{
    /**
     * @var array|mixed
     */
    public array $support;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($support=[])
    {
        $this->support = $support;
        $this->support = array_merge($this->support,[
            'version' => '4.6'
        ]);

    }




    public function supportedWidgets()
    {
        return [
            'App\Http\Livewire\Mintreu\Widgets\FullWidthSlider' => 'Full Slider',
            'App\Http\Livewire\Mintreu\Widgets\SlickSlider' => 'Slick Slider',
            'App\Http\Livewire\Mintreu\Widgets\CategoryWiseContentGallery' => 'Category Content Gallery',
            'App\Http\Livewire\Mintreu\Widgets\PaginateGallery' => 'Simple Pagination Gallery',
            'App\Http\Livewire\Mintreu\Widgets\InfiniteScroller' => 'Infinite Scroller Gallery',
            'App\Http\Livewire\Mintreu\Widgets\VideoPlayer' => 'Video Player',
            'App\Http\Livewire\Mintreu\Widgets\StoryReader' => 'Story Reader',
        ];
    }

    public function getSupportedWidgetsAttribute()
    {
        return [
            'App\Http\Livewire\Mintreu\Widgets\FullWidthSlider' => ['type','where','latest','limit'],
            'App\Http\Livewire\Mintreu\Widgets\SlickSlider' => ['title','type','where','latest','limit','custom'],
            'App\Http\Livewire\Mintreu\Widgets\CategoryWiseContentGallery' => ['type','limit'],
            'App\Http\Livewire\Mintreu\Widgets\PaginateGallery' => ['type','limit'],
            'App\Http\Livewire\Mintreu\Widgets\InfiniteScroller' => ['type','limit'],
            'App\Http\Livewire\Mintreu\Widgets\VideoPlayer' => ['type','limit'],
            'App\Http\Livewire\Mintreu\Widgets\StoryReader' => ['type','limit'],
        ];
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mintreu.themes.thirdparty.stream-it.stream-it')->with(['support' => $this->support]);
    }
}
