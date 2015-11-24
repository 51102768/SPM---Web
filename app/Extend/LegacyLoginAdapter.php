<?php namespace App\Extend;
use App\Extend\LoginAdapter as LoginAdapter;

use App\Extend\Legacy as Legacy;

use Illuminate\Support\Facades\Auth;


class LegacyLoginAdapter implements LoginAdapter{
	protected $legacy;

	public function __construct(Legacy $legacy){
		$this->legacy = $legacy;
	}

	public function login($email,$password){
		$this->legacy->signup($email, $password);
	}

	public function validate($email, $password){
		if($this->legacy->validate($email, $password))
			return true;
		else return false;
	}

	public function findOrCreate($user){}
} 