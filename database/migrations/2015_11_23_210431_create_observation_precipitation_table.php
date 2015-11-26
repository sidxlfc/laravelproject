<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservationPrecipitationTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observation_precipitation', function (Blueprint $table) 
        {
            //$table->increments('id');
            $table->string('obs_id');
            $table->string('p_name');
            $table->string('amount');
            $table->timestamps();

            $table->primary(['obs_id', 'p_name']);

            $table->foreign('obs_id')
                ->references('obs_id')
                ->on('observations')
                ->onDelete('cascade');

            $table->foreign('p_name')
                ->references('p_name')
                ->on('precipitation')
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
        Schema::drop('observation_precipitation');
    }
}
