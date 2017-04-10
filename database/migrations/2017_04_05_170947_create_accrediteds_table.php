<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccreditedsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accrediteds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('last_name');
			$table->string('birthdate');
			$table->string('cel');
			$table->string('phone');
			$table->string('email');
			$table->string('address');
			$table->string('nationality');
			$table->string('ife');
			$table->string('curp');
			$table->string('sex');
			$table->string('civil_status');
			$table->string('name_conyug');
			$table->integer('user_id')->unsigned()->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('accrediteds');
	}

}
