<?php

namespace App\Http\Livewire\Mintreu\Pages;

use App\Http\Livewire\Mintreu\Widgets\FullWidthSlider;
use App\Models\Post;
use App\Models\System\Theme\ThemePage;

class ViewPost extends Page
{

    protected ?string $type = 'post';
    protected ?string $pageType = ThemePage::VIEW_POST_PAGE;
    protected ?string $view = 'livewire.mintreu.pages.view-post';

    public function mount(Post $post)
    {

        $this->record = $post;
    }

    protected function withAdditional(): array
    {

        return [
            'record' => $this->record,
        ];
    }
}
