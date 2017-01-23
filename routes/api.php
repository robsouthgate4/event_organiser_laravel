<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API \es
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


// Rest api requests
Route::post('/events/create', 'EventsController@create');
Route::post('/events/delete', 'EventsController@delete');
Route::post('/events/edit', 'EventsController@edit');
Route::get('/events/all', 'EventsController@getall');