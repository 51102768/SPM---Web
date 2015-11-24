<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','ShopController@homepage');

Route::post('get-shop','ShopController@getData');

Route::get('shop/{shop_name}',"ShopController@getOneShop");

Route::get('search',"ShopController@searchData");

Route::post('auth/legacy',"LoginController@loginLegacy");

Route::get('/auth/signout',"LoginController@signout");

Route::post('register',"RegisterController@store");

Route::get('/auth/facebook',"LoginController@loginFacebook");

Route::get('/auth/facebook/callback',"LoginController@loginFacebookCallback");