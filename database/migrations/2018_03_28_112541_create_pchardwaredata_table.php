<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePchardwaredataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pchardwaredata', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID', true);
            $table->string('PcMacAddress', 40);
            $table->string('PcIpAddress', 30);
            $table->string('PcNetworkName', 30);
            $table->integer('LastUser')->unsigned();
            $table->foreign('LastUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pchardwaredata');
    }
}
