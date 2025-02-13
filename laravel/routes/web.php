<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/character', function () {
    return view('character');
})->name('character');

Route::get('/comics', function () {
    $fumetti = config('db.fumetti');

    /* $fumettiCollection = collect($fumetti);

    $comic = $fumettiCollection->filter(fn ($fumetto) => $fumetto['type'] == 'comic book');
    $graphic = $fumettiCollection->filter(fn ($fumetto) => $fumetto['type'] == 'graphic novel');

    $data = [
        'fumetti' => [
            'comic' => $comic,
            'graphic' => $graphic,
        ]
    ];
 */
    return view('comics',compact('fumetti'));
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collect', function () {
    return view('collect');
})->name('collect');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/comics/{single}', function ($single) {
    $fumetti = config('db.fumetti');
    if (array_key_exists($single, $fumetti)) {
        $selectes = $fumetti[$single];
        return view('comic', compact('selectes'));
    } else {
        abort(404);
    }
})->name('comic');