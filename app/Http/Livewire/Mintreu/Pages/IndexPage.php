<?php

namespace App\Http\Livewire\Mintreu\Pages;

use App\Models\System\Theme\ThemePage;

class IndexPage extends Page
{

    protected ?string $pageType = ThemePage::INDEX_PAGE;
    protected ?string $view = 'livewire.mintreu.pages.index-page';

}
