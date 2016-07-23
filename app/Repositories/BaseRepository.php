<?php

namespace App\Repositories;

interface BaseRepository
{
    public function all();

    public function save($data);

    public function get();

    public function update();
}
