<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{


    public function gallery(Request $request)
    {

        $contents = Video::with('category','tags')->where('status',true)->paginate(10);



        return view('video',['content' => $contents]);
    }











}
