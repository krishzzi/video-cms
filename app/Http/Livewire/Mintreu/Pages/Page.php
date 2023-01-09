<?php

namespace App\Http\Livewire\Mintreu\Pages;

use App\Http\Livewire\Mintreu\Widgets\FullWidthSlider;
use App\Http\Livewire\Mintreu\Widgets\Widget;
use App\Models\System\System;
use App\Models\System\Theme\Theme;
use App\Models\System\Theme\ThemePage;
use App\View\Components\Mintreu\Themes\Thirdparty\StreamIt\StreamIt;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Livewire\Component;

abstract class Page extends Component
{

    protected ?string $pageType = null;
    protected ?string $view = null;
    protected mixed $layout = StreamIt::class;
    protected ?string $type = null;
    protected ?ThemePage $themePage;
    protected Collection $widgets;
    protected array $widgetBag = [];
    protected ?Theme $theme;
    private ?System $system;

    protected ?Model $record=null;
    protected Collection|array $records=[];

    public function __construct()
    {
        $this->prepareBag();

        $this->system = System::firstWhere('is_default',true);
        if (!is_null($this->system) && $this->system->is_valid)
        {
            $this->theme = $this->system->themes()->firstWhere('is_active',true);
            if (!is_null($this->theme))
            {
                $this->themePage = $this->theme->pages()->firstWhere('type',$this->pageType);
                if (!is_null($this->themePage))
                {
                    $this->widgets = $this->themePage->widgets()->where('status',true)->orderby('priority')->get();

                }else{
                    return abort(404);
                }
            }else{
                // Call Installer
            }
        }



    }

    protected function alterWidgetObject(\App\Models\System\Theme\Widget $widget)
    {

        if (str_contains(strtolower($widget->component),'player') || str_contains(strtolower($widget->component),'reader'))
        {
            return new $widget->component(array_merge([
                'title' => $widget->title,
                'features' => $widget->features,
                'record' => $this->record,
            ],$widget->attributes[0]));
        }
        return null;
    }


    public function resolveWidgets()
    {
        foreach ($this->widgets as $widget)
        {
            if(class_exists($widget->component))
            {

                $widgetInstance = $this->alterWidgetObject($widget) ?? new $widget->component(array_merge([
                    'title' => $widget->title,
                    'features' => $widget->features
                ],$widget->attributes[0]));

                if ($widgetInstance instanceof FullWidthSlider)
                {

                    $this->widgetBag['above'][] = [
                        'instance' => $widgetInstance,
                    ];
                }else{
                    $this->widgetBag['between'][] = [
                        'instance' => $widgetInstance,
                    ];
                }


            }else{

            }




        }
    }

    protected function withAdditional():array
    {
        return [];
    }


    private function prepareBag()
    {
        $this->widgetBag['above'] = [];
        $this->widgetBag['between'] = [];
        $this->widgetBag['below'] = [];
    }

    private function validateView($page=''): bool
    {
        if (!empty($page))
        {
            return  @file_exists(resource_path('views/livewire/mintreu/pages/'.str_replace('.','/',$page).'.blade.php'));
        }
        return false;
    }


    public function render()
    {
        $this->resolveWidgets();
        $renderFile = $this->validateView($this->themePage->page) ? 'livewire.mintreu.pages.'.$this->themePage->page : $this->view;

        return view($renderFile)
            ->with(array_merge(['widgets' => $this->widgetBag,'type' => $this->type],$this->withAdditional()))
            ->layout($this->theme->layout,[
                'support' => [
                    'title' => $this->themePage->name,
                ]
            ]);
    }

}
