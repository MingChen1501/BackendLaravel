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
Route::get('stories/{id}', 'App\Http\Controllers\StoryController@getStoryById');
Route::post('stories', 'App\Http\Controllers\StoryController@saveStory');
Route::put('stories/{id}', 'App\Http\Controllers\StoryController@updateStory');
Route::delete('stories/{id}', 'App\Http\Controllers\StoryController@deleteStory');
