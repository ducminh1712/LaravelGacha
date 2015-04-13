<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGachasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_gachas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('gacha_id');
			$table->dateTime('last_free_draw_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_gachas');
	}

}
