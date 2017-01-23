<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/events', 'EventsController@index');

// Rest api requests
Route::post('event/create', 'EventController@create');
Route::post('event/delete', 'EventController@delete');
Route::post('event/edit', 'EventController@edit');
Route::get('event/all', 'EventController@getall');