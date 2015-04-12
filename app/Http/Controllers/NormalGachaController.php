<?php namespace Gacha\Http\Controllers;

use Gacha\Http\Requests;
use Gacha\Http\Controllers\Controller;

use Gacha\Model\Gacha;
use Gacha\Model\Item;
use Illuminate\Http\Request;

use Gacha\Model\GachaProbability;

class NormalGachaController extends GachaController {

	public function __construct() {
		$this->gacha_id = Gacha::NORMAL_GACHA_ID;
	}
}
