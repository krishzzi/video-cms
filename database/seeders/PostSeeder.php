<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(50)->create()->each(function ($post){
            $post->category()->attach(Category::where('status',true)->get()->random()->pluck('id'));
            
            $post->save();
        });
    }
}
