<?php

namespace App\Http\Livewire\Mintreu\Pages;

use App\Models\Post;
use App\Models\System\Theme\ThemePage;
use App\Models\Tag;
use App\View\Components\Mintreu\Themes\Thirdparty\StreamIt\StreamIt;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class PostsPage extends Page
{
    use WithPagination;

    protected ?string $view = 'livewire.mintreu.pages.posts-page';

    protected ?string $type = 'post';
    protected ?string $pageType = ThemePage::LIST_POST_PAGE;

//    public $search = '';
//    public $page = 1;
//    protected  $tag;
//
//    public function mount(Request $request)
//    {
//        $this->page = $request->page;
//
//        $postTags = Tag::where('status',true)->withCount('posts')->latest('posts_count')->limit(20)->get();
//
//        $this->tag = $postTags;
//
//
//    }

    public function updatingSearch()
    {
        $this->resetPage();
    }






//    public function render()
//    {
//        return view('livewire.mintreu.pages.posts-page')->with([
//            'records' => Post::where('title', 'like', '%'.$this->search.'%')->paginate(12),
//        'tags' => $this->tag])->layout(StreamIt::class);
//    }
}
