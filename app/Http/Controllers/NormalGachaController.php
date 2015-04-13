<?php namespace Gacha\Http\Controllers;

use Gacha\Http\Requests;
use Gacha\Http\Controllers\Controller;

use Gacha\Model\Gacha;
use Gacha\Model\Item;
use Gacha\Model\UserGacha;
use Illuminate\Http\Request;

use Gacha\Model\GachaProbability;
use Illuminate\Support\Facades\Auth;

class NormalGachaController extends GachaController {

	public function __construct() {
		parent::__construct();
		$this->gacha_id = Gacha::NORMAL_GACHA_ID;
	}
}
