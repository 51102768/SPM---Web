<?php namespace App\Extend;

use Auth;
use App\User;
use Illuminate\Auth\UserInterface;

class Facebook{
	public function __construct(){
	}

	public function login($id){
		Auth::loginUsingId($id);
	}

	public function findOrCreateUser($facebookUser){
		$authUser = User::where('facebook_id', $facebookUser->id)->first();
 
        if ($authUser){
            return $authUser;
        }
 
        return User::create([
            'fullname' => $facebookUser->name,
            'email' => $facebookUser->email,
            'facebook_id' => $facebookUser->id
        ]);
	}

}