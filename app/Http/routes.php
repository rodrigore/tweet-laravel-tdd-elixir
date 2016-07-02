<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('{username}', 'UsersController@show');

Route::get('/tweets/create', 'TweetsController@create');
Route::post('/tweets/store', 'TweetsController@store');
