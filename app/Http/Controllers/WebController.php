<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class WebController extends Controller
{


    public function __construct()
    {

        $this->setting = Setting::where('default',true)->first();
    }

    public function index()
    {

        $setting = $this->setting;
        $content = Video::with('category','tags')->where('status',true);

        return view('home')->with(compact('setting','content'));

    }



    public function allVideos()
    {
        $setting = $this->setting;
        $contents = Video::with('category','tags')->where('status',true)->paginate(12);

        return view('videos')->with(compact('setting','contents'));
    }



    public function allStories()
    {
        $setting = $this->setting;
        $contents = Post::with('category','tags')->where('status',true)->paginate(12);

        return view('stories')->with(compact('setting','contents'));
    }




    public function readPost(Post $post)
    {
        $setting = $this->setting;
        //$contents = Post::with('category','tags')->where('status',true)->paginate(12);
        $post->load('category','tags','comments');

        return view('read-stories')->with(compact('setting','post'));
    }

    public function watchVideo(Video $video)
    {
        $setting = $this->setting;
        //$contents = Post::with('category','tags')->where('status',true)->paginate(12);
        $video->load('category','tags','comments');

        return view('watch-videos')->with(compact('setting','video'));
    }



    public function showCategory(Category $category)
    {
        $setting = $this->setting;
        //$contents = Post::with('category','tags')->where('status',true)->paginate(12);
        $category->load('posts','videos');
        $allPosts = $category->posts->toQuery()->paginate(12);
        $allVideos = $category->videos->toQuery()->paginate(12);



        return view('show-category')->with(compact('setting','category','allPosts','allVideos'));
    }



    public function search(Tag $tag)
    {
        $found = false;
        $setting = $this->setting;
        $tag->load('posts','videos');
        $allPosts = collect([]);
        $allVideos = collect([]);
        if($tag->posts->count())
        {
            $found = true;
            $allPosts = $tag->posts->toQuery()->paginate(12);
        }
        if($tag->videos->count())
        {
            $found = true;
            $allVideos = $tag->videos->toQuery()->paginate(12);
        }

        return view('search')->with(compact('setting','allPosts','allVideos','found'));

    }



    public function searchText(Request $request)
    {
        $found = false;
        $setting = $this->setting;
        $tag = Tag::with('posts','videos')->firstWhere('name',$request->tag);
        $allPosts = collect([]);
        $allVideos = collect([]);
        if(!is_null($tag))
        {
            if($tag->posts->count())
            {
                $found = true;
                $allPosts = $tag->posts->toQuery()->paginate(12);
            }
            if($tag->videos->count())
            {
                $found = true;
                $allVideos = $tag->videos->toQuery()->paginate(12);
            }
        }





        return view('search')->with(compact('setting','allPosts','allVideos','found'));
    }




}
