<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mem_name');
            $table->string('mem_password');
            $table->string('mem_avatar')->default('mem_avatar/default_img.jpg');
            $table->string('mem_phone');
            $table->string('mem_email');
            $table->string('mem_address')->nullable();
            $table->dateTime('mem_date');
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
        Schema::dropIfExists('member');
    }
}
