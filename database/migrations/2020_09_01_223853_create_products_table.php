<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('name');
            $table->unsignedBigInteger('idCategory');
            $table->float('sale_price', 10, 2);
            $table->integer('stock');
            $table->text('description');
            $table->char('state', 1)->default('1');
            $table->timestamps();


            $table->foreign('idCategory')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
