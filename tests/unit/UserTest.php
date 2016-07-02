<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testAUserCanBeFoundByUsername()
    {
        // arrange
        $newUser = factory(User::class)->create([
            'username' => 'rodrigore'
        ]);

        // act
        $userFound = User::findByUsername('rodrigore');

        // assert
        $this->assertEquals($newUser->id, $userFound->id);
        $this->assertEquals($newUser->username, $userFound->username);
    }
}
