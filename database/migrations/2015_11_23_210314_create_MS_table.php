<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MS', function (Blueprint $table) 
        {
            $table->string('MS_name');
            $table->string('MS_type');
            $table->string('MS_city');
            $table->timestamps();

            $table->primary('MS_name');

            $table->foreign('MS_city')
                ->references('city_name')
                ->on('cities')
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
        Schema::drop('MS');
    }
}
