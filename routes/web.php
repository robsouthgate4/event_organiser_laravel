<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/events', 'EventsController@index');

