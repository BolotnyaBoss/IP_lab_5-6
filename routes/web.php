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
Route::get('/check', function () {
    return view('check');
});
Route::post('/check', 'App\Http\Controllers\FormController@store');
Route::get('players', 'App\Http\Controllers\FormController@all_players');
Route::get('players/{id}', 'App\Http\Controllers\FormController@get_players');
Route::post('players', 'App\Http\Controllers\FormController@new_players');
Route::delete('players/{id}', 'App\Http\Controllers\FormController@delete_players');
