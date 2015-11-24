<?php namespace App\Extend;

interface LoginAdapter{
	public function login($email, $password);

	public function validate($email, $password);

	public function findOrCreate($user);
}