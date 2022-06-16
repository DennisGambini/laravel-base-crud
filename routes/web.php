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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('comics', 'ComicController');






// rotte placeholders header
Route::get('/characters', function () {
    return view('placeholders.characters');
})->name('characters');
Route::get('/movies', function () {
    return view('placeholders.movies');
})->name('movies');
Route::get('/tv', function () {
    return view('placeholders.tv');
})->name('tv');
Route::get('/games', function () {
    return view('placeholders.games');
})->name('games');
Route::get('/collectibles', function () {
    return view('placeholders.collectibles');
})->name('collectibles');
Route::get('/videos', function () {
    return view('placeholders.videos');
})->name('videos');
Route::get('/fans', function () {
    return view('placeholders.fans');
})->name('fans');
Route::get('/news', function () {
    return view('placeholders.news');
})->name('news');
Route::get('/shop', function () {
    return view('placeholders.shop');
})->name('shop');