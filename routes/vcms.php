<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', [\App\Http\Controllers\Web\IndexController::class,'index'])->name('home');

//Route::get('/',\App\Http\Livewire\Mintreu\Panel\Panel::class)->name('home');



Route::get('watch-video/{video:slug}',[\App\Http\Controllers\WebController::class,'watchVideo'])->name('display.video');
Route::get('read-story/{post:slug}',[\App\Http\Controllers\WebController::class,'readPost'])->name('display.post');

//Route::get('videos/category/{category:slug}',[\App\Http\Controllers\Web\GalleryController::class,'viewVideoCategory'])->name('gallery.video.category');
//Route::get('stories/category/{category:slug}',[\App\Http\Controllers\Web\GalleryController::class,'viewPostCategory'])->name('gallery.post.category');

Route::get('videos',[\App\Http\Controllers\WebController::class,'allVideos'])->name('gallery.video');
Route::get('stories',[\App\Http\Controllers\WebController::class,'allStories'])->name('gallery.post');

Route::get('category/{category:slug}',[\App\Http\Controllers\WebController::class,'showCategory'])->name('category.single');
Route::get('search/{tag:name}',[\App\Http\Controllers\WebController::class,'search'])->name('search.tag');


//Route::get('categories',[\App\Http\Controllers\Web\GalleryController::class,'categories'])->name('gallery.category');

Route::post('searches/k/',[\App\Http\Controllers\WebController::class,'searchText'])->name('search.via.form');


Route::get('test',function (){
    return view('rambowx');
});

