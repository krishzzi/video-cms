<?php

namespace App\Http\Livewire\Mintreu\Widgets;

use App\Models\Video;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class PaginateGallery extends Component
{

    use WithPagination;
    public string $type='video';

    public $search = '';
    private Request $request;

    public function mount(Request $request,string $type='video')
    {
        $this->page = $request->page;
        $this->type = $type;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }







    public function render()
    {
        return view('livewire.mintreu.widgets.paginate-gallery')->with([
            'records' => Video::where('title', 'like', '%'.$this->search.'%')->paginate(12),
            'page' => $this->page,
        ]);
    }
}
