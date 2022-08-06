<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProVariantDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_variant_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pro_id')->references('id')->on('products');
            $table->foreignId('variant_title_id')->references('id')->on('variant_title');
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
        Schema::dropIfExists('pro_variant_details');
    }
}
