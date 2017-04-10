<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnchoringsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anchorings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_institution');
			$table->decimal('amount_resource',19,4);
			$table->string('reference');
			$table->string('destination_account');
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
		Schema::drop('anchorings');
	}

}
