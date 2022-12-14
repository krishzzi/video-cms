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




Route::get('watch-video/{video:slug}',[\App\Http\Controllers\WebController::class,'watchVideo'])->name('display.video');
Route::get('read-story/{post:slug}',[\App\Http\Controllers\WebController::class,'readPost'])->name('display.post');


Route::get('videos',[\App\Http\Controllers\WebController::class,'allVideos'])->name('gallery.video');
Route::get('stories',[\App\Http\Controllers\WebController::class,'allStories'])->name('gallery.post');

Route::get('category/{category:slug}',[\App\Http\Controllers\WebController::class,'showCategory'])->name('category.single');
Route::get('search/{tag:name}',[\App\Http\Controllers\WebController::class,'search'])->name('search.tag');


Route::post('search/k/',[\App\Http\Controllers\WebController::class,'searchText'])->name('search.via.form');


Route::get('contact-us',[\App\Http\Controllers\WebController::class,'contactUsForm'])->name('contact.us.form');
Route::post('contact-submit',[\App\Http\Controllers\WebController::class,'contactUs'])->name('contact.us');

Route::get('policies/{page:slug}',[\App\Http\Controllers\WebController::class,'getPolicy'])->name('read.policy');
