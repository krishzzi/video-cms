<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('/')->middleware(\App\Http\Middleware\CheckApplicationMiddleware::class)->group(function (){

    Route::get('/',\App\Http\Livewire\Mintreu\Pages\IndexPage::class)->name('home');

    Route::get('/videos',\App\Http\Livewire\Mintreu\Pages\VideosPage::class)->name('videos');
    Route::get('/video/{video:slug}',\App\Http\Livewire\Mintreu\Pages\ViewVideo::class)->name('video.view');


    Route::get('/stories',\App\Http\Livewire\Mintreu\Pages\PostsPage::class)->name('posts');
    Route::get('/story/{post:slug}',\App\Http\Livewire\Mintreu\Pages\ViewPost::class)->name('post.view');

    Route::get('/login',\App\Http\Livewire\Mintreu\Auth\Pages\LoginPage::class)->name('login');
    Route::get('/register',\App\Http\Livewire\Mintreu\Auth\Pages\RegisterPage::class)->name('register');


    Route::get('test',[\App\Http\Controllers\TestController::class,'index']);



    Route::prefix('/dashboard')->group(function (){

        Route::get('/',\App\Http\Livewire\Mintreu\Dashboard\Pages\DashboardPage::class)->name('dashboard');
        Route::get('/logout',function (\Illuminate\Http\Request $request){
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        })->name('logout');

    });





});



Route::get('/setup', function () {
    return view('installer-page');
})->name('goToInstaller');


//Route::get('/', function () {
//    return view('homes');
//});
//
//Route::get('/', [WebController::class,'index'])->name('home');
//
////
//
////
////Route::get('/dashboard', function () {
////    return view('dashboard');
////})->middleware(['auth'])->name('dashboard');
//
//
//
//Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');
//Route::get('/my-watchlist', [\App\Http\Controllers\DashboardController::class,'myWatchlist'])->middleware(['auth'])->name('mywatchlist');
//
//
//
//require __DIR__.'/auth.php';
//
//
//require __DIR__.'/vcms.php';
//

