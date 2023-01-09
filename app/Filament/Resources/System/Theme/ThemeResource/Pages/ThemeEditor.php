<?php

namespace App\Filament\Resources\System\Theme\ThemeResource\Pages;

use App\Filament\Resources\System\Theme\ThemeResource;
use App\Models\System\Theme\Theme;
use App\Models\User;
use Closure;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\Action;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Symfony\Component\Finder\Finder;

class ThemeEditor extends Page
{
    protected static string $resource = ThemeResource::class;

    protected static string $view = 'filament.resources.system.theme.theme-resource.pages.theme-editor';



    public string $file_data;
    public string $layout_file;
    public string $page_file;
    public string $widget_file;






    protected function getFormSchema(): array
    {
        return [
            Fieldset::make('System Theme Editor')->schema([

                Textarea::make('file_data')
                    ->label('Code Editor')
                    ->rows(15)
                    ->cols(20)
                    ->columnSpan(3),




                Fieldset::make('Choose File')->schema([

                    Select::make('layout_file')
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $allLayout = $this->getLayoutOptions();
                            $set('file_data',$this->setFileContent($state));
                            $set('page_file','');
                            $set('widget_file','');
                        })
                        ->options($this->getLayoutOptions())->columnSpanFull(),

                    Select::make('page_file')
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $allLayout = $this->getLayoutOptions();
                            $set('file_data',$this->setFileContent($state));
                            $set('layout_file','');
                            $set('widget_file','');
                        })
                        ->options($this->getPageListOption())->columnSpanFull(),

                    Select::make('widget_file')
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $allLayout = $this->getLayoutOptions();
                            $set('file_data',$this->setFileContent($state));
                            $set('page_file','');
                            $set('layout_file','');
                        })
                        ->options($this->getWidgetListOption())->columnSpanFull(),

//                    Placeholder::make('help')
//                        ->hint('Choose From File Selector')
//                        ->content('Changes Made Above Files Will Reflect On Your Application Frontend')
//                        ->columnSpanFull(),

                ])->columnSpan(1),


            ])->columns(4),
        ];
    }


    public function submit()
    {
        $data = $this->form->getState();
        if (!empty($data))
        {
            $currentFile = $data['layout_file'] ?? $data['page_file'] ?? $data['widget_file'] ?? null;
            $currentFile = resource_path('views/'.$currentFile.'.blade.php');
            if (!is_null($currentFile) && file_exists($currentFile))
            {
                $saveAbleData = $data['file_data'];
                file_put_contents($currentFile,$saveAbleData);
                $this->notify('success', 'Changes Save Successfully', true);
            }

        }

        return redirect()->to(ThemeResource::getUrl('editor'));
        //return redirect()->route(self::getRouteName());
    }




    protected function setFileContent(string $fileName)
    {
        $tFile = resource_path('views/'.$fileName.'.blade.php');


        $content = file_get_contents($tFile);
        return $content;
    }

    private function getLayoutOptions()
    {
        return [
            'components/mintreu/themes/thirdparty/stream-it/stream-it' => 'Layout File',
            'components/mintreu/themes/thirdparty/stream-it/blocks/header-block' => 'Header',
            'components/mintreu/themes/thirdparty/stream-it/blocks/footer-block' => 'Footer'
        ];
    }

    private function getPageListOption()
    {
        return [
            'livewire/mintreu/pages/streamit/index-page' => 'Index Page',
            'livewire/mintreu/pages/streamit/videos-page' => 'List Video Page',
            'livewire/mintreu/pages/streamit/posts-page' => 'List Post Page',
            'livewire/mintreu/pages/streamit/view-video' => 'View Video Page',
            'livewire/mintreu/pages/streamit/view-post' => 'View Post Page',

        ];
    }

    private function getWidgetListOption()
    {
        return [
            'livewire/mintreu/widgets/full-width-slider' => 'Full Slider',
            'livewire/mintreu/widgets/slick-slider' => 'Slick Slider',
            'livewire/mintreu/widgets/category-wise-content-gallery' => 'Category Content Gallery',
            'livewire/mintreu/widgets/infinite-scroller' => 'Infinite Scroller',
            'livewire/mintreu/widgets/paginate-gallery' => 'Pagination Gallery',
            'livewire/mintreu/widgets/story-reader' => 'Story Reader',
            'livewire/mintreu/widgets/video-player' => 'Video Player',
            'livewire/mintreu/pages/view-advert' => 'Ads Spot',
        ];
    }


}
