<?php

namespace App;


use Illuminate\Contracts\Auth\Guard as Authenticator;
use App\Repositories\UserRepository;
use Laravel\Socialite\Contracts\Factory as Socialite;


class AuthenticateUser {

	private $users;

	private $socialite;

	private $auth;

	public function __construct(UserRepository $users, Socialite $socialite, Authenticator $auth)
	{

		$this->users = $users;
		$this->socialite = $socialite;
		$this->auth = $auth;

	}


	//Driver is the site
	//$hasCode is the boolean test
	//$listener is 
	public function execute($hasCode, $listener)
	{
	

		if ( ! $hasCode )
		{ 
			return $this->getAuthorizationFirst();

		}
		//$this->getLinkedInUser();
		//dd($this);

		$storage = $this->getLinkedInUser();
		$user = $this->users->findByUsernameOrCreate($storage);
		//dd($this);

		$user->data = json_encode($storage);


		$this->auth->login($user, true);

		return $listener->userHasLoggedIn($user);

	}

	private function getAuthorizationFirst()
	{

		
		return $this->socialite->with('linkedin')->redirect();

	}

	private function getLinkedInUser()
	{
		
		//dd($this->socialite->with('linkedin'));//->user());		
		//dd($this->socialite->with('mailchimp')->user());
		//dd($this->socialite->with('linkedin')->user());
		//return $this->socialite->driver('mailchimp')->user();
		return $this->socialite->with('linkedin')->user();

	}


}