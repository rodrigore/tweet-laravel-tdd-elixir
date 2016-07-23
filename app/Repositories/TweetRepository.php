<?php

namespace App\Repositories;

use App\Tweet;

class TweetRepository implements BaseRepository
{
    public function all()
    {
    }

    public function save($data)
    {
        $tweet = new Tweet;
        $tweet->body = 'cuerpo';
        $tweet->user_id = 1;
        $tweet->save();
    }

    public function get()
    {
    }
}
