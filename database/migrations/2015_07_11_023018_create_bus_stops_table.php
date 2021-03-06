<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_stops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('address');
            $table->string('reference');
            $table->integer('neighborhood_id')->unsigned();
            $table->foreign('neighborhood_id')->references('id')->on('neighborhoods')->onDelete('cascade');
            $table->integer('coordinate_id')->unsigned();
            $table->foreign('coordinate_id')->references('id')->on('coordinates')->onDelete('cascade');
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
        Schema::drop('bus_stops');
    }
}
