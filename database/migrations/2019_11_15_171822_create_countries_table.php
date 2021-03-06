<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('iso', 2);
			$table->string('name', 80);
			$table->string('nicename', 80);
			$table->char('iso3', 3)->nullable();
			$table->smallInteger('numcode')->nullable();
			$table->integer('phonecode');
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
		Schema::drop('countries');
	}

}
;