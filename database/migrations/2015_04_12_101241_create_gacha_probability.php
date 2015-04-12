<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGachaProbability extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gacha_probabilities', function(Blueprint $table)
		{
			$table->integer('gacha_id');
			$table->integer('common_probability');
			$table->integer('uncommon_probability');
			$table->integer('rare_probability');
			$table->integer('superrare_probability');
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
		Schema::drop('gacha_probabilities');
	}

}
