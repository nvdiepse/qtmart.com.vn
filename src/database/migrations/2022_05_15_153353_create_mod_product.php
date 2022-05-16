<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mod_product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('image');
            $table->string('slug');
            $table->string('content');
            $table->integer('product_category_id');
            $table->integer('status');
            $table->string('desc');
            $table->integer('brand_id');
            $table->boolean('is_deal_of_the_week')->default(false);
            $table->boolean('is_hot_best_seller')->default(false);
            $table->boolean('is_hot_new_arrivals')->default(false);
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
        Schema::dropIfExists('mod_product');
    }
}
