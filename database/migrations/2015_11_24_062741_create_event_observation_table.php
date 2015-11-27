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
            $table->string('obs_id')->index();
            $table->foreign('obs_id')
                ->references('obs_id')
                ->on('observations')
                ->onDelete('cascade');

            $table->string('event_name')->index();
            
            //$table->primary(['obs_id', 'event_name']);

            $table->foreign('event_name')
                ->references('event_name')
                ->on('events')
                ->onDelete('cascade');

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
        Schema::drop('event_observation');
    }
}
