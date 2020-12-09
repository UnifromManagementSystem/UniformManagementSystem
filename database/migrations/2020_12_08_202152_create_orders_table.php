<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_number')->autoIncrement();
            $table->integer('order_count');
            $table->string('order_situ', 50);
            $table->string('deposit_situ', 50);
            $table->integer('order_price');
            $table->dateTime('order_date');
            $table->string('id', 20);
            $table->integer('product_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
