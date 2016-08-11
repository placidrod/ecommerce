<?php

namespace App\Repos;

use App\User;
use App\UserLevel;

class UserRepo
{
	public function createUser($data)
	{
		$user = User::create($data);

		$this->assignUserLevel($user, 'customer');

		return $user;
	}

	public function assignUserLevel($user, $level)
	{
		return $user->user_levels()->attach(UserLevel::where('name', $level)->get());
	}
}