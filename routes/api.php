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


 Route::get('get_events_with_workshop', 'App\Http\Controllers\EventsController@getWarmupEvents');

 Route::get('get_second_task_data', 'App\Http\Controllers\EventsController@secondTask');

 Route::get('get_third_task_data', 'App\Http\Controllers\EventsController@thirdTask');


