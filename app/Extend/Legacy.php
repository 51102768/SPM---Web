<?php namespace App\Extend;

use Auth;

class Legacy{
	public $test;
	public function __construct(){
		$this->test = "test";
	}

	public function signup($email, $password){
		Auth::attempt(["email"=>$email, "password"=>$password]);
	}

	public function validate($email, $password){
		if(Auth::validate(["email"=>$email, "password"=>$password]))
			return true;
		else return false;
	}

}