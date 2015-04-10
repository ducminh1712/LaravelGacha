<?php namespace Gacha\Http\Controllers;

use Gacha\Http\Requests;
use Gacha\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ExclusiveGachaController extends Controller {

	public function index()
	{
		return array('name' => 'Steve', 'state' => 'CA');
	}

	public function draw()
	{
		return array('name' => 'Steve', 'state' => 'CA');
	}

}
