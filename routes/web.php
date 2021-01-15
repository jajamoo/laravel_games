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
    return view('welcome');
});

Route::get('games', 'GamesController@index')->name('all_games');

Route::get('games/{id}', 'GamesController@show')->name('show_game');

Route::get('games/create', 'GamesController@create')->name('create');

Route::post('games', 'GamesController@store')->name('add_games');
