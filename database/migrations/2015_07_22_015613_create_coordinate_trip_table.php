<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinateTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinate_trip', function (Blueprint $table) {
            $table->integer('coordinate_id')->unsigned()->index();
            $table->foreign('coordinate_id')->references('id')->on('coordinates')->onDelete('cascade');
            $table->integer('trip_id')->unsigned()->index();
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
            $table->integer('coordinate_type_id')->unsigned();
            $table->foreign('coordinate_type_id')->references('id')->on('coordinate_types')->onDelete('cascade');
            $table->integer('sequence')->unsigned();
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
        Schema::drop('coordinate_trip');
    }
}
