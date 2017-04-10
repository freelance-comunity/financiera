<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('histories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('credit_actualy');
			$table->string('name_company');
			$table->string('amount');
			$table->string('term');
			$table->string('payment_amount');
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
		Schema::drop('histories');
	}

}
