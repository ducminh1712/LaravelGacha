<?php namespace Gacha\Http\Controllers;

use Gacha\Http\Requests;
use Gacha\Http\Controllers\Controller;
use Gacha\Model\Gacha;

use Illuminate\Http\Request;

class ExclusiveGachaController extends GachaController {

	public function __construct() {
		parent::__construct();
		$this->gacha_id = Gacha::EXCLUSIVE_GACHA_ID;
	}
}
