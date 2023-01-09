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
        Post::factory(100)->create()->each(function ($post){
            $post->category()->attach(Category::where('status',true)->get()->random()->pluck('id'));

            $post->save();
        });


        $tenRandomPosts = Post::where('status',true)->get()->random(10);




        foreach ($tenRandomPosts as $post)
        {
            $post->is_upcoming = true;
            $post->is_slider = true;
            $post->is_suggestion = true;
            $post->save();
        }


    }
}
