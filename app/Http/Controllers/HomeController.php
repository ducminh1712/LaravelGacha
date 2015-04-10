<?php namespace Gacha\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$normal_gacha_description = "Normal Gacha Description";
		$ex_gacha_description = "Exclusive Gacha Description";
		$box_gacha_description = "Box Gacha Description";
		return view('home', ['normal_gacha_description' => $normal_gacha_description,
							'ex_gacha_description' => $ex_gacha_description,
							'box_gacha_description' => $box_gacha_description]);
	}

}
