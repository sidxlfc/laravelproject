<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) 
        {
            //$table->increments('id');
            $table->string('obs_id');
            $table->string('cloud_coverage');
            $table->string('temperature');
            $table->timestamps();

            $table->primary('obs_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('observations');
    }
}
