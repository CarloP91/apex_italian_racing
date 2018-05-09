<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DriverAndAutosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
         public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {


            $table->string('name_driver');
            $table->string('img_url_auto');
            $table->string('name_team')->nullable();
            $table->string('img_driver_url');

            $table->string('australia')->nullable();
            $table->string('bahrain')->nullable();
            $table->string('china')->nullable();
            $table->string('baku')->nullable();
            $table->string('spagna')->nullable();
            $table->string('monaco')->nullable();
            $table->string('canada')->nullable();
            $table->string('francia')->nullable();
            $table->string('austria')->nullable();
            $table->string('uk')->nullable();
            $table->string('germania')->nullable();
            $table->string('ungheria')->nullable();
            $table->string('belgio')->nullable();
            $table->string('italia')->nullable();
            $table->string('singapore')->nullable();
            $table->string('russia')->nullable();
            $table->string('giappone')->nullable();
            $table->string('usa')->nullable();
            $table->string('messico')->nullable();
            $table->string('brasile')->nullable();
            $table->string('eau')->nullable();

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
        Schema::dropIfExists('drivers');
    }
    
}
