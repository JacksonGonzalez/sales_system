<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idBuy');
            $table->unsignedBigInteger('idProduct');
            $table->bigInteger('quantity');
            $table->float('buy_price', 10, 2);
            $table->timestamps();

            $table->foreign('idProduct')->references('id')->on('products');
            $table->foreign('idBuy')->references('id')->on('buys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_product');
    }
}
