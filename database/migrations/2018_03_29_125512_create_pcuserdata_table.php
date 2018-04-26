<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcuserdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcuserdata', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID', true);
            $table->integer('UserID')->unsigned();
            $table->integer('UserAuthLevel')->unsigned()->default(3);
            $table->foreign('UserID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcuserdata');
    }
}
