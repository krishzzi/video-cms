<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {

        $activity = Activity::where('user_id',auth()->user()->id)->get();
        $activity->load('videos','posts');

        $inlist = $activity->where('inlist',true);
        $liked = $activity->where('like',true);






        return view('dashboard')->with(compact('inlist','liked'));

    }



}
