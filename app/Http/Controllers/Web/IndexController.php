<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Video;

class IndexController extends Controller
{


    public function index()
    {


       $setting = Setting::where('default',true);
        $content = Video::with('category','tags')->where('status',true);

        return view('home')->with(compact('setting','content'));

    }








}
