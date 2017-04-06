<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('avenue');
			$table->string('streets');
			$table->string('number');
			$table->string('colony');
			$table->string('reference');
			$table->string('postal_code');
			$table->string('municipality');
			$table->string('city');
			$table->string('federative');
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
		Schema::drop('addresses');
	}

}
