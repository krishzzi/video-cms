<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class GalleryController extends Controller
{


    public function watchVideo(Video $video)
    {

        $video->load('comments','tags','category');



        return view('watch-video')->with(compact('video'));

    }



    public function videoGallery(Request $request)
    {

        $category = Category::has('videos')->where('status',true)->get();
        $category->load('videos');

        $categories = $category;

        return view('gallery.video-gallery')->with(compact('categories'));

    }


    public function viewVideoCategory(Category $category)
    {

        $category->load('videos');

        $categories = collect([]);



        return view('gallery.video-gallery')->with(compact('categories','category'));


    }




    // Post

    public function readPost(Post $post)
    {

        $post->load('comments','tags','category');



        return view('gallery.read-story')->with(compact('post'));

    }



    public function postGallery(Request $request)
    {

        $category = Category::has('posts')->where('status',true)->get();
        $category->load('posts');



        $categories = $category;



        return view('gallery.post-gallery')->with(compact('categories'));

    }


    public function viewPostCategory(Category $category)
    {

        $category->load('posts');

        $categories = collect([]);


        return view('gallery.post-gallery')->with(compact('categories','category'));


    }






}
