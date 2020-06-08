<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GamesController@index')->name('games.index');

Route::get('/show', function () {
    return view('show');
});
