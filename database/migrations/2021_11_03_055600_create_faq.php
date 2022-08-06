<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pro_id')->references('id')->on('products');
            $table->string('question');
            $table->timestamp('que_post_date')->default(now());
            $table->foreignId('user_id')->references('id')->on('end_users');
            $table->string('answer');
            $table->timestamp('ans_post_date')->nullable();
            $table->boolean('faq_status');
            $table->foreignId('admin_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq');
    }
}
