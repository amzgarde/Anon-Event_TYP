<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('engages', function(Blueprint $table)
		{
			$table->increments('unique_id');
			$table->integer('user_id');
			$table->integer('event_id');
			$table->boolean('rsvp');
			$table->boolean('favourited');
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
		Schema::drop('engages');
	}

}
