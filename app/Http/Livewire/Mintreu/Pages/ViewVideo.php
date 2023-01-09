<?php

namespace App\Http\Livewire\Mintreu\Pages;

use App\Models\System\Theme\ThemePage;
use App\Models\Video;


class ViewVideo extends Page
{


    protected ?string $view = 'livewire.mintreu.pages.streamit.view-video';
    protected ?string $type = 'video';
    protected ?string $pageType = ThemePage::VIEW_VIDEO_PAGE;


    public function mount(Video $video)
    {

        $this->record = $video;
    }

    protected function withAdditional(): array
    {

        return [
            'record' => $this->record,
        ];
    }


}
