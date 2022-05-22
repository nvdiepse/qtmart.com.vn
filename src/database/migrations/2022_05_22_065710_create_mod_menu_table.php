<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mod_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mn_name');
            $table->string('mn_slug')->unique()->nullable();
            $table->string('mn_image')->nullable();
            $table->string('mn_brand_id')->nullable();
            $table->string('mn_desc')->nullable();
            $table->tinyInteger('mn_hot')->default(0);
            $table->tinyInteger('mn_status')->default(1);
            $table->integer('mn_parent_id')->nullable();
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
        Schema::dropIfExists('mod_menu');
    }
}
