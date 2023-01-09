<?php

namespace App\Http\Controllers;

use App\Models\mix\sActivity;

class DashboardController extends Controller
{
    //

    public function index()
    {

        $activity = sActivity::where('user_id',auth()->user()->id)->get();
        $activity->load('videos','posts');

        $inlist = $activity->where('inlist',true);
        $liked = $activity->where('like',true);






        return view('user.dashboard')->with(compact('inlist','liked'));

    }



    public function myWatchlist()
    {
        $activity = sActivity::where('user_id',auth()->user()->id)->get();
        $activity->load('videos','posts');

        $inlist = $activity->where('inlist',true);
        $liked = $activity->where('like',true);






        return view('user.watchlist')->with(compact('inlist','liked'));
    }



}
