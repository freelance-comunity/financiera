<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->decimal('minimum_amount',12,2);
			$table->decimal('maximum_amount',12,2);
			$table->string('minimum_term');
			$table->string('maximum_term');
			$table->decimal('cup_interest',12,2);
			$table->decimal('surcharge',12,2);
			$table->string('modality');
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
		Schema::drop('products');
	}

}
