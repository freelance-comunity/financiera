<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondonationsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('condonations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('date');
			$table->string('branch');
			$table->string('adviser');
			$table->string('accredited');
			$table->string('amount');
			$table->string('term');
			$table->string('amortization');
			$table->string('surcharges');
			$table->string('date_to');
			$table->string('date_at');
			$table->string('justification');
			$table->integer('credits_id')->unsigned()->foreign('credits_id')->references('id')->on('credits')->onDelete('cascade');
			$table->integer('payments_id')->unsigned()->foreign('payments_id')->references('id')->on('payments')->onDelete('cascade');
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
		Schema::drop('condonations');
	}

}
