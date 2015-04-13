<?php namespace Gacha\Http\Controllers;

use Gacha\Http\Requests;
use Gacha\Http\Controllers\Controller;
use Gacha\Model\Gacha;
use Gacha\Model\GachaProbability;
use Gacha\Model\Item;

use Gacha\Model\UserItem;
use Gacha\Model\UserGacha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
		$user_id = Auth::id();

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
		if ($this->mustPayForGacha()) {
			$gacha_cost = Gacha::find($this->gacha_id)->getAttribute('cost');
			$user = Auth::user();
			if ($user->total_coin >= $gacha_cost) {
				$user->total_coin -= $gacha_cost;
				$user->save();
				$result["coin_after"] = $user->total_coin;
			} else {
				$result["error_msg"] = "Insufficent coins";
				return $result;
			}
		} else {
			$user_gacha = UserGacha::whereRaw('gacha_id = ? and user_id = ?', [$this->gacha_id, $user_id])->first();
			$now = time();
			$user_gacha->last_free_draw_time = date('Y-m-d H:i:s', $now);
			$user_gacha->save();
		}

		$items = Item::whereRarity($result["rarity"])->get()->toArray();

		$drawn_index = rand(0, count($items) - 1);

		$result["name"] = $items[$drawn_index]["name"];
		$result["img"] = $items[$drawn_index]["img"];

		$user_item = UserItem::whereRaw('item_id = ? and user_id = ?', [$items[$drawn_index]["id"], $user_id])->first();
		if ($user_item) {
			$user_item->num += 1;
			$user_item->save();
		} else {
			UserItem::create(['item_id' => $items[$drawn_index]["id"], 'user_id' => $user_id]);
		}
		return $result;
	}

	public function mustPayForGacha() {
		$user_id = Auth::id();
		$user_gacha = UserGacha::whereRaw('gacha_id = ? and user_id = ?', [$this->gacha_id, $user_id])->first();
		if (!$user_gacha) {
			UserGacha::create(['gacha_id' => $this->gacha_id, 'user_id' => $user_id]);
			return false;
		} else {
			$gachaResetInterval = Gacha::find($this->gacha_id)->getAttribute('reset_interval');
			if(!$gachaResetInterval){
				return false;
			}
			$diff_time = time() - strtotime($user_gacha["last_free_draw_time"]);
			if($diff_time < $gachaResetInterval){
				return true;
			}
			return false;
		}
	}
}
