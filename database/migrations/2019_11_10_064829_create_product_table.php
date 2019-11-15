<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
        $table->bigIncrements('id');
            $table->string('pro_name');
            $table->string('pro_image')->default('pro_image/default_img.jpg');
            $table->double('pro_price');
            $table->string('pro_address')->nullable();
            $table->dateTime('pro_date');
            $table->text('pro_description');
            $table->integer('pro_view');
            $table->tinyInteger('pro_status')->nullable();
            $table->tinyInteger('pro_active');
            $table->integer('pro_mem_id');
            $table->integer('pro_cate_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
