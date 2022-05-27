<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModProductArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mod_product_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pa_name');
            $table->string('pa_slug')->unique()->nullable();
            $table->tinyInteger('pa_hot')->default(0)->index();
            $table->tinyInteger('pa_status')->default(1)->index();
            $table->integer('pa_menu_id')->index()->default(0);
            $table->integer('pa_view')->default(0);
            $table->mediumText('pa_desc')->nullable();
            $table->string('pa_image')->nullable();
            $table->text('pa_content')->nullable();
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
        Schema::dropIfExists('mod_product_articles');
    }
}
