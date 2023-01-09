<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Advert;
use App\Models\Category;
use App\Models\ContactForm;
use App\Models\Page;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class WebController extends Controller
{


    private $setting;
    private $adverts;

    public function __construct()
    {

        $this->setting = Setting::where('default',true)->first();
        $advertList = Advert::where('status',true)->latest('priority')->get();

        $this->adverts = ($advertList->count()) ? $advertList->where('expire_at','>',now()) : null;

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
        $adverts = $this->adverts;
        $post->load('category','tags','comments');



        $rightAdvert = is_null($adverts) ? null : $adverts->where('position','right');
        $leftAdvert = is_null($adverts) ? null : $adverts->where('position','left');
        $middleAdvert = is_null($adverts) ? null :$adverts->where('position','middle');

        return view('read-stories')->with(compact('setting','post','rightAdvert','leftAdvert','middleAdvert'));
    }

    public function watchVideo(Video $video)
    {
        $setting = $this->setting;
        $adverts = $this->adverts;

        $video->load('category','tags','comments');

        return view('watch-videos')->with(compact('setting','video','adverts'));
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





    public function contactUsForm()
    {

        $setting = $this->setting;
        $success = '';

        return view('contact-us')->with(compact('setting','success'));

    }


    public function contactUs(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:10',
            'subject' => 'required',
            'message' => 'required'
        ]);




        $form = ContactForm::create($validate);

//        dd($form);
//
//        Mail::to($this->setting->contact_us ?? config('mail.from.address'))->send(new ContactMail($form));

        return redirect()->back()
            ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }





    public function getPolicy(Page $page)
    {
        if($page->redirect && !empty($page->redirect_url))
        {
            return redirect()->to($page->redirect_url);
        }

        $page->load('tags');
        $policy = $page;
        $setting = $this->setting;
        dd($setting);
        return view('policy')->with(compact('setting','policy'));


    }




}
