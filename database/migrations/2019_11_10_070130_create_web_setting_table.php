<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_setting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('web_logo')->defaul('web_logo/defaul_img.jpg');
            $table->string('web_address');
            $table->string('new_gmail');
            $table->integer('new_hotline');
            $table->string('web_facebook');

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
        Schema::dropIfExists('web_setting');
    }
}
