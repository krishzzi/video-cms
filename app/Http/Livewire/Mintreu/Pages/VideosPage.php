<?php

namespace App\Http\Livewire\Mintreu\Pages;

use App\Models\Category;
use App\Models\System\Theme\ThemePage;
use App\Models\Video;
use App\View\Components\Mintreu\Themes\Thirdparty\StreamIt\StreamIt;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class VideosPage extends Page
{
    use WithPagination;

    protected ?string $view = 'livewire.mintreu.pages.videos-page';
    protected ?string $pageType = ThemePage::LIST_VIDEO_PAGE;

    protected ?string $type = 'video';

    public $search = '';
//    private Request $request;
//
//    public function mount(Request $request)
//    {
//        $this->request = $request;
//    }

    public function updatingSearch()
    {
        $this->resetPage();
    }



//    public function render()
//    {
//        return view('livewire.mintreu.pages.videos-page')->with([
//            'records' => Video::where('title', 'like', '%'.$this->search.'%')->paginate(12),
//            //'page' => $this->request->page,
//        ])->layout(StreamIt::class);
//    }
}
