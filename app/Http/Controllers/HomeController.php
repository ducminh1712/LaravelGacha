<?php namespace Gacha\Http\Controllers;

use Gacha\Model\Gacha;
use Illuminate\Support\Facades\Auth;


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


	public function __construct()
	{
		parent::__construct();
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Auth::user();
		$normal_gacha_description = Gacha::find(Gacha::NORMAL_GACHA_ID)->getAttribute("description");
		$ex_gacha_description = Gacha::find(Gacha::EXCLUSIVE_GACHA_ID)->getAttribute("description");
		$box_gacha_description = Gacha::find(Gacha::BOX_GACHA_ID)->getAttribute("description");
		return view('home', ['normal_gacha_description' => $normal_gacha_description,
							'ex_gacha_description' => $ex_gacha_description,
							'box_gacha_description' => $box_gacha_description,
							'total_coin' => $user->total_coin]);
	}

}
