<?php

namespace App\Filament\Widgets;

use App\Models\Activity;
use App\Models\Advert;
use App\Models\Category;
use App\Models\ContactForm;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Categories', $this->getCategoryCount())
                //      ->description('32k increase')
             ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),

            Card::make('Tags', $this->getTagCount())
                //      ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),

            Card::make('Posts', $this->getPostsCount())
                //         ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
            Card::make('Videos', $this->getVideosCount())
//                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),


            Card::make('Users', $this->getUsersCount())
//                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),


            Card::make('Mail', $this->getContactFormCount())
//                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),

            Card::make('Advert', $this->getAdvertCount())
//                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),

            Card::make('Activity', $this->getActivityCount())
//                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),


        ];
    }


    protected function getCategoryCount()
    {
        return Category::all()->count();
    }

    private function getPostsCount()
    {
        return Post::all()->count();
    }

    private function getVideosCount()
    {
        return Video::all()->count();
    }

    private function getUsersCount()
    {
        return User::all()->count() - 1;
    }

    private function getContactFormCount()
    {
        return ContactForm::all()->count();
    }

    private function getAdvertCount()
    {
        return Advert::all()->count();
    }

    private function getTagCount()
    {
        return Tag::all()->count();
    }

    private function getActivityCount()
    {
        return Activity::all()->count();
    }

}
