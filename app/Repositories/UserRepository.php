<?php

namespace App\Repositories;

use App\User;

class UserRepository{

	public function findByUsernameOrCreate($userData)
	{

		$user = User::where('email', '=', $userData->email)->first();

		if( ! $user )
		{
			return User::firstOrCreate([
				'name'		=> $userData->name,
				'email'		=> $userData->email,
			]);
		}

		return $user;

	}

}