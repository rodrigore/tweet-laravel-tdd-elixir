<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\Request; */

use App\Http\Requests;
use App\Http\Requests\CreateTweetRequest;
use App\Services\UploadDocument;
use App\Tweet;
use App\Repositories\TweetRepository;
use App\Repositories\BaseRepository;

class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index');
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function store(CreateTweetRequest $request)
    {
        Tweet::create($request->all());

        return 'guardar seguro';
    }

    public function edit()
    {
    }
}
