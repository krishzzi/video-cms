<?php

namespace App\Http\Livewire\Mintreu\Widgets;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Pagination\Cursor;
use Illuminate\Support\Collection;
use Livewire\Component;

class InfiniteScroller extends Component
{


    public $records; // holds are list of posts.
    public $nextCursor; // holds our current page position.
    public $hasMorePages; // Tells us if we have more pages to paginate.

    public $type='video';
    private Request $request;

    /**
     * Initialize data
     * @return void
     */
    public function mount(Request $request,string $type = 'video')
    {
        $this->type = $type;
        $this->request = $request;
        $this->records = new Collection(); // initialize the data
        $this->loadRecords(); // load the data
    }

    /**
     * Load data and maintain cursor state
     *
     */
    public function loadRecords()
    {
        if ($this->hasMorePages !== null  && !$this->hasMorePages) {
            return;
        }

        if ($this->type == 'video')
        {
            $model = Video::query();
        }else{
            $model = Post::query();
        }



        $records = $model->cursorPaginate(
            15,
            ['*'],
            'cursor',
            Cursor::fromEncoded($this->nextCursor)
        );
        $this->records->push(...$records->items(16));
        $this->hasMorePages = $records->hasMorePages();
        if ($this->hasMorePages === true) {
            $this->nextCursor = $records->nextCursor()->encode();
        }
    }








    public function render()
    {
        return view('livewire.mintreu.widgets.infinite-scroller');
    }
}
