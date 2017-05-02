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
			$table->string('colony');
			$table->string('municipality');
			$table->string('state');
			$table->string('name_spouse');
			$table->string('aval');
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
