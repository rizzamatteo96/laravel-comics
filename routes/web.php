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
// route per home page
Route::get('/', function () {
    return view('home');
})->name('home-page');

// route per comics page
Route::get('/comics', function () {

    $data = ['cardsData' => config('comics')];

    return view('comics', $data);
})->name('comics-page');

// route per movies page
Route::get('/movies', function () {
    return view('movies');
})->name('movies-page');

// route per tv page
Route::get('/tv', function () {
    return view('tv');
})->name('tv-page');

// route per games page
Route::get('/games', function () {
    return view('games');
})->name('games-page');

// route per collectibles page
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles-page');

// route per videos page
Route::get('/videos', function () {
    return view('videos');
})->name('videos-page');

// route per fans page
Route::get('/fans', function () {
    return view('fans');
})->name('fans-page');

// route per news page
Route::get('/news', function () {
    return view('news');
})->name('news-page');

// route per shop page
Route::get('/shop', function () {
    return view('shop');
})->name('shop-page');
