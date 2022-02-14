<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.home',['data' => config('comics')]);
})-> name('home');
Route::get('/comics/{id}', function ($id) {
    $data = collect(config(('comics')));
    $card = [];
    foreach ($data as $value) {
        if($value['id'] === intval($id)) {
            $card [] = $value;
        }   
    }
    $singleCard = [];
    foreach($card as $c) {
        $singleCard = $c;
    }
    return view('guest.partials.card.card_info',['card' => $singleCard]);
})-> name('card');

// rotte navbar
Route::get('/characters', function () {
    return view('guest.characters');
})-> name('characters');

Route::get('/comics', function () {
    return view('guest.home',['data' => config('comics')]);
})-> name('comics');

Route::get('/movies', function () {
    return view('guest.movies');
})-> name('movies');

Route::get('/tv', function () {
    return view('guest.tv');
})-> name('tv');

Route::get('/games', function () {
    return view('guest.games');
})-> name('games');

Route::get('/collectibles', function () {
    return view('guest.collectibles');
})-> name('collectibles');

Route::get('/videos', function () {
    return view('guest.videos');
})-> name('videos');

Route::get('/fans', function () {
    return view('guest.fans');
})-> name('fans');

Route::get('/news', function () {
    return view('guest.news');
})-> name('news');

Route::get('/shop', function () {
    return view('guest.shop');
})-> name('shop');
// fine rotte navbar