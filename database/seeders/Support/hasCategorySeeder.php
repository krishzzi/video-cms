<?php

namespace Database\Seeders\Support;

use App\Models\Category;
use Illuminate\Support\Str;

trait hasCategorySeeder
{

    public function seedDemoCategories()
    {
        $categoryList = $this->getCategorisArray();
        foreach ($categoryList as $categoryDetail)
        {
            $category = Category::updateOrCreate([
                'name' => $categoryDetail,
                'slug' => Str::slug($categoryDetail),
                'status' => true,
            ]);
        }
    }

    protected function getCategorisArray()
    {
        return [
            'Movies',
            'Song',
            'News',
            'Drama',
            'Trending',
            'International',
        ];
    }



}
