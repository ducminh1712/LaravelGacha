<?php namespace Gacha\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	public function __construct() {
		$this->updateBonusCoin();
	}

	protected function updateBonusCoin() {
		$user = Auth::user();
		if($user) {
			$user->total_coin += time() - $user->last_coin_added_time;
			$user->last_coin_added_time = time();

			$user->save();
		}
	}

}
