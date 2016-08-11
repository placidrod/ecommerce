<?php

use App\Repos\UserRepo;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
	use DatabaseTransactions;

	/** @test */
    public function when_a_user_is_created_it_is_assigned_the_customer_level()
    {
        $user = new UserRepo;

        $newUser = $user->createUser(factory(App\User::class)->make()->toArray());

        $customerLevel = App\UserLevel::where('name', 'customer')->first();

        $this->seeInDatabase('user_level_user', ['user_level_id' => $customerLevel->id, 'user_id' => $newUser->id]);
    }
}
