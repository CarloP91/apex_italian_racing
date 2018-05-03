<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImgCarsForPilot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('autos', function (Blueprint $table){
        $table->increments('id');
        $table->string('driver_name');
        $table->string('url_auto');
        $table->string('nome_auto')->nullable();;
        $table->string('driver_img');
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
        Schema::dropIfExists('autos');
    }   
}
