<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventObservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_observation', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('observation_id');
            
            $table->string('event_name');
            
            
            /*
            $table->foreign('observation_id')
                ->references('id')
                ->on('observations')
                ->onDelete('cascade');

            $table->foreign('event_name')
                ->references('event_name')
                ->on('events')
                ->onDelete('cascade');

                $table->timestamps();
            
                $table->primary(['obs_id', 'event_name']);
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
        Schema::drop('event_observation');
    }
}
