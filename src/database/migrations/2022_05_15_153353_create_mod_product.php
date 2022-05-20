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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('code')->unique();
            $table->string('image')->nullable();
            $table->string('slug')->index()->unique();
            $table->string('content')->nullable();
            $table->integer('product_category_id')->default(0);
            $table->string('product_unit')->nullable();
            $table->integer('status')->index()->default(1);
            $table->string('desc')->nullable();
            $table->integer('brand_id');
            $table->boolean('is_deal_of_the_week')->default(false);
            $table->boolean('is_hot_best_seller')->default(false);
            $table->boolean('is_hot_new_arrivals')->default(false);
            $table->timestamps();
            $table->softDeletes();
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
