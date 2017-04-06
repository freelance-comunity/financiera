<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvalsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('last_name');
			$table->string('address');
			$table->string('colony');
			$table->string('municipality');
			$table->string('nacionality');
			$table->string('place');
			$table->string('birthday');
			$table->string('ife');
			$table->string('curp');
			$table->string('phone');
			$table->string('cel');
			$table->string('sex');
			$table->string('ocupation');
			$table->string('address_work');
			$table->integer('accrediteds_id')->unsigned()->foreign('accrediteds_id')->references('id')->on('accrediteds');
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
		Schema::drop('avals');
	}

}
