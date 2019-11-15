<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('ser_name');
            $table->string('ser_image')->defaul('ser_image/default_img.jpg');
            $table->double('ser_price');
            $table->integer('ser_quanlity');
            $table->dateTime('ser_date');
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
        Schema::dropIfExists('service');
    }
}
