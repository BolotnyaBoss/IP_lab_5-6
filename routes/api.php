<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('players', 'App\Http\Controllers\FormController@all_players');
Route::get('players/{id}', 'App\Http\Controllers\FormController@get_players');
Route::post('players', 'App\Http\Controllers\FormController@new_players');
Route::delete('players/{id}', 'App\Http\Controllers\FormController@delete_players');

