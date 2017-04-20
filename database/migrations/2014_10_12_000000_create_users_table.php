<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('address');
            $table->string('phone');
            $table->date('birthday');
            $table->string('position');
            $table->string('start_date');
            $table->enum('type', ['propietario','caja', 'promotor','coordinador','mesa','dirección']);
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('branch_id')->unsigned()->foreign('branch_id')->references('id')->on('branches');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
