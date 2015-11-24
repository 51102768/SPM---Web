<?php namespace App\Extend;
use App\Extend\LoginAdapter as LoginAdapter;

use App\Extend\Facebook as Facebook;

use Illuminate\Support\Facades\Auth;

use App\User;


class FacebookLoginAdapter implements LoginAdapter{
	protected $facebook;

	public function __construct(Facebook $facebook){
		$this->facebook = $facebook;
	}

	public function login($email, $password=false){
		$authUser = User::where("email", $email)->first();
		return $this->facebook->login($authUser->id);
	}

	public function validate($email,$password){
		
	}

	public function findOrCreate($facebookUser){
		return $this->facebook->findOrCreateUser($facebookUser);
	}
} 