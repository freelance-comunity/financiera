<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('dependent');
			$table->string('regimen');
			$table->string('type_housing');
			$table->string('type_home');
			$table->string('time_address');
			$table->string('economic');
			$table->string('type_material');
			$table->string('scholarship');
			$table->string('school_grade');
			$table->string('sector');
			$table->string('company');
			$table->integer('accredited_id')->unsigned()->foreign('accredited_id')->references('id')->on('accrediteds');
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
		Schema::drop('studies');
	}

}
