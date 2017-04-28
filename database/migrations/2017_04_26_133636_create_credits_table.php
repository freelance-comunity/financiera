<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('credits', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('date');
			$table->string('name_spouse');
			$table->string('previous_credit');
			$table->string('debts');
			$table->string('economic_activity');
			$table->string('amount_requested');
			$table->string('authorized_amount');
			$table->string('warranty');
			$table->string('warranty_type');
			$table->string('warranty_value');
			$table->string('sequence');
			$table->string('term');
			$table->string('frequency_payment');
			$table->string('interest');
			$table->string('adviser');
			$table->string('observations');
			$table->string('requested');
			$table->string('qualification');
			$table->string('status');
			$table->integer('accredited_id')->unsigned()->foreign('accredited_id')->references('id')->on('accrediteds');
			$table->integer('address_id')->unsigned()->foreign('address_id')->references('id')->on('addresses');
			$table->integer('aval_id')->unsigned()->foreign('aval_id')->references('id')->on('avals');
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
		Schema::drop('credits');
	}

}
