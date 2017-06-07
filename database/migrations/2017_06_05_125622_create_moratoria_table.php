<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoratoriaTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moratoria', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('date');
			$table->string('surcharges');
			$table->string('expiration_from');
			$table->string('expiration_to');
			$table->string('justification');
			$table->integer('credit_id')->unsigned()->foreign('credit_id')->references('id')->on('credits')->onDelete('cascade');
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
		Schema::drop('moratoria');
	}

}
