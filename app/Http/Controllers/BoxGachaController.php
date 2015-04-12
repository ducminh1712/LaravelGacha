<?php namespace Gacha\Http\Controllers;

use Gacha\Http\Requests;
use Gacha\Http\Controllers\Controller;
use Gacha\Model\Gacha;

use Illuminate\Http\Request;

class BoxGachaController extends GachaController {

	public function index()
	{
		$this->gacha_id = Gacha::BOX_GACHA_ID;
		return parent::index();
	}

	public function draw()
	{
		return array('name' => 'Steve', 'state' => 'CA');
	}

}
