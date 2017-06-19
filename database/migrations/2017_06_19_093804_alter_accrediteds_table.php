<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAccreditedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accrediteds', function (Blueprint $table) {
             $table->string('spouse_name')->after('civil_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accrediteds', function (Blueprint $table) {
         $table->dropColumn('spouse_name');
        });
    }
}
