<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityObservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_observation', function (Blueprint $table) 
        {
            $table->string('obs_id');
            $table->string('city');
            $table->string('ms');
            $table->timestamps();

            $table->primary(['obs_id', 'city']);

            $table->foreign('obs_id')
                ->references('obs_id')
                ->on('observations')
                ->onDelete('cascade');

            $table->foreign('city')
                ->references('city_name')
                ->on('cities')
                ->onDelete('cascade');

            $table->foreign('ms')
                ->references('MS_name')
                ->on('MS')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('city_observation');
    }
}
