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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);
Route::post('normal/gacha_info', 'NormalGachaController@index');
Route::post('exclusive/gacha_info', 'ExclusiveGachaController@index');
Route::post('box/gacha_info', 'BoxGachaController@index');

Route::post('normal/draw', 'NormalGachaController@draw');
Route::post('exclusive/draw', 'ExclusiveGachaController@draw');
Route::post('box/draw', 'BoxGachaController@draw');