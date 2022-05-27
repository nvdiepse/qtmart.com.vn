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
            $table->string('slug')->unique()->nullable();
            $table->string('content')->nullable();
            $table->integer('product_category_id');
            $table->string('product_unit')->nullable();
            $table->tinyInteger('status')->index()->default(1);
            $table->string('desc')->nullable();
            $table->integer('price')->default(0);
            $table->integer('price_entry')->default(0)->comment('giá nhập');
            $table->integer('brand_id');
            $table->boolean('is_deal_of_the_week')->default(false);
            $table->boolean('is_hot_best_seller')->default(false);
            $table->boolean('is_hot_new_arrivals')->default(false);
            $table->integer('review_total')->default(0);
            $table->integer('review_star')->default(0);
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
