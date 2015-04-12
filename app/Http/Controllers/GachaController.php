<?php namespace Gacha\Http\Controllers;

use Gacha\Http\Requests;
use Gacha\Http\Controllers\Controller;
use Gacha\Model\Gacha;
use Gacha\Model\GachaProbability;
use Gacha\Model\Item;

use Illuminate\Http\Request;

class GachaController extends Controller {

	protected $gacha_id = 0;

	public function index()
	{
		$gacha_info = Gacha::find($this->gacha_id)->attributesToArray();
		return $gacha_info;
	}

	public function draw()
	{
		$result = null;

		$gacha_probability = GachaProbability::whereGachaId($this->gacha_id)->first();
		$probabilities = array('common' => $gacha_probability['common_probability'],
			'uncommon' => $gacha_probability['uncommon_probability'],
			'rare' => $gacha_probability['rare_probability'],
			'superrare' => $gacha_probability['superrare_probability']);
		$draw_value = rand(1, 100);

		foreach($probabilities as $key => $value) {
			if ($draw_value <= $value){
				$result["rarity"] = $key;
				break;
			}
		}

		$items = Item::whereRarity($result["rarity"])->get()->toArray();

		$drawn_index = rand(0, count($items) - 1);

		$result["name"] = $items[$drawn_index]["name"];
		return $result;
	}
}
