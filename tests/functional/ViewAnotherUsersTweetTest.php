<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Tweet;

class ViewAnotherUsersTweetTest extends TestCase
{
    use DatabaseMigrations;

    public function testAUserCanViewAnotherUserTweet()
    {
        // arrange
        $user = factory(User::class)->create([
            'username' => 'rodrigore'
        ]);

        $tweet = factory(Tweet::class)->make([
            'body' => 'Mi super tweet'
        ]);

        $user->tweets()->save($tweet);

        // assert
        $this->visit('/rodrigore')
            ->see('Mi super tweet');
    }
}
