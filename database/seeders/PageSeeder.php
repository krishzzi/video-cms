<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory(15)->create();

        $aboutUsPage = Page::where('section',1)->first();
        $aboutUsPage->slug = 'about-us';
        $aboutUsPage->save();
    }
}
