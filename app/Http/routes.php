<?php

use App\Repositories\TweetRepository;
use App\Repositories\BaseRepository;

\App::bind(BaseRepository::class, TweetRepository::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('tweets', function() {

    dd(\App\Tweet::whereUserId(1)->first());

    /* return $tweets->sortByDesc(function($tweet) { */
    /*     return $tweet->id; */
    /* }); */
});

Route::get('{username}', 'UsersController@show');

Route::get('/tweets', function() {
    return \App\Tweet::where('body', '=', 'a')->limit(10)->orderBy('id')->toSql();
});

Route::get('/tweets', 'TweetsController@index');
Route::get('/tweets/create', 'TweetsController@create');
Route::post('/tweets/store', 'TweetsController@store');

Route::get('/api/tweets', function() {
    return \App\Tweet::all();
});

