<?php

namespace App\View\Components\Mintreu\Themes\Thirdparty\StreamIt\Blocks;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class FooterBlock extends Component
{
    public bool $showContent=true;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        if($request->route()->getName() == 'login' || $request->route()->getName() == 'forget')
        {
            $this->showContent = false;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mintreu.themes.thirdparty.stream-it.blocks.footer-block');
    }
}
