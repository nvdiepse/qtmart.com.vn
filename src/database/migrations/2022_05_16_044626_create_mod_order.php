<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mod_order', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('vat_code');
            $table->string('vat_value');
            $table->string('vat_total');
            $table->string('vat_company');
            $table->integer('customer_id');
            $table->string('full_name');
            $table->string('address');
            $table->string('cell_phone');
            $table->integer('status');
            $table->double('ship_price');
            $table->float('order_discount')->default(0);
            $table->double('total_discount');
            $table->double('total_origin');
            $table->double('total_import');
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
        Schema::dropIfExists('mod_order');
    }
}
