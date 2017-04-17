<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('information', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_company')->default('Introduce nombre de la compañia');;
			$table->string('email')->default('Introduce email de la compañia');;
			$table->string('address')->default('Introduce domicilio de la compañia');;
			$table->string('cp')->default('Introduce CP de la compañia');;
			$table->string('city')->default('Introduce ciudad de ubicación de la compañia');;
			$table->string('state')->default('Introduce estado de ubicación de la compañia');;
			$table->string('phone')->default('Introduce Teléfono de la compañia');;
			$table->string('logo')->default('logo_company.jpg');;
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
		Schema::drop('information');
	}

}
