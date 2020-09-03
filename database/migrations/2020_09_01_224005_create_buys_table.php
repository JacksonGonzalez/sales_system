<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProduct');
            $table->unsignedBigInteger('idSupplier');
            $table->bigInteger('number');
            $table->dateTime('date_hour');
            $table->float('total', 10, 2);
            $table->timestamps();

            $table->foreign('idProduct')->references('id')->on('products');
            $table->foreign('idSupplier')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buys');
    }
}
