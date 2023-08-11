<?php

use App\Http\Controllers\StoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('stories', 'App\Http\Controllers\StoryController@getAllStory');
Route::get('stories/{id}', 'App\Http\Controllers\StoryController@show');
Route::post('stories', 'App\Http\Controllers\StoryController@saveStory');
Route::put('stories/{id}', 'App\Http\Controllers\StoryController@updateStory');
Route::delete('stories/{id}', 'App\Http\Controllers\StoryController@deleteStory');

Route::get('pages', 'App\Http\Controllers\PageController@index');
Route::get('pages/{id}', 'App\Http\Controllers\PageController@show');
Route::post('pages', 'App\Http\Controllers\PageController@store');
Route::put('pages/{id}', 'App\Http\Controllers\PageController@update');
Route::delete('pages/{id}', 'App\Http\Controllers\PageController@destroy');

Route::get('audios', 'App\Http\Controllers\AudioController@index');
Route::get('audios/{id}', 'App\Http\Controllers\AudioController@show');

Route::get('texts', 'App\Http\Controllers\TextController@index');
Route::get('texts/{id}', 'App\Http\Controllers\TextController@show');

