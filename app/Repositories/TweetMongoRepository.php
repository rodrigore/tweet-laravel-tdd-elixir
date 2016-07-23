<?php

namespace App\Repositories;

class TweetMongoRepository implements BaseRepository
{
    public function all();

    public function save($data);

    public function get();
}
