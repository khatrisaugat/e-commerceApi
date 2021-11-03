<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_rate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pro_id')->references('id')->on('products');
            $table->string('pro_rate_details');
            $table->smallInteger('pro_rating');
            $table->foreignId('pic_col_id')->references('id')->on('pics_col');
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
        Schema::dropIfExists('pro_rate');
    }
}
