<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMosquesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mosques', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('image', 191)->nullable();
			$table->text('description', 65535)->nullable();
			$table->text('address', 65535)->nullable();
			$table->string('website', 191)->nullable();
			$table->string('prefectures', 191)->nullable();
			$table->string('city', 191)->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('status')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mosques');
	}

}
