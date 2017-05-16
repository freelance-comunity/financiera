<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEconomicEvaluationsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('economic_evaluations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('place');
			$table->date('date');
			$table->string('name_accredited');
			$table->string('activity_economic');
			$table->string('phone');
			$table->string('address');
			$table->string('sales');
			$table->string('buy');
			$table->string('gross_profit');
			$table->string('other_income');
			$table->string('other_expenses');
			$table->string('familiar_costs');
			$table->string('montly_net_income');
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
		Schema::drop('economic_evaluations');
	}

}
