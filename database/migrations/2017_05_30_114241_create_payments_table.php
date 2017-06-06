<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('number');
			$table->string('ammount');
			$table->string('surcharge');
			$table->string('total');
			$table->string('status')->dafault('Pendiente');
			$table->date('payment_date');
			$table->integer('debt_id')->unsigned()->foreign('debt_id')->references('id')->on('debts');
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
		Schema::drop('payments');
	}

}
