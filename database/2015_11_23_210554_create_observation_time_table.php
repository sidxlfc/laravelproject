<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservationTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('observation_time', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->timestamps();

            $table->primary('obs_id');

            /*
            $table->foreign('obs_id')
                ->references('obs_id')
                ->on('observations')
                ->onDelete('cascade');
                */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('observation_time');
    }
}
