<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreetViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('street_views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('heading');
            $table->integer('fov');
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
        Schema::drop('street_views');
    }
}
