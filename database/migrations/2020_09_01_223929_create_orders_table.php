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
            $table->id();
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idClient');
            $table->unsignedBigInteger('idSupplier');
            $table->string('invoice_type');
            $table->dateTime('date_hour');
            $table->string('serial');
            $table->bigInteger('invoice_number');
            $table->float('tax', 10, 2);
            $table->float('total', 10, 2);
            $table->char('state', 3)->default('PED');
            $table->timestamps();

            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idClient')->references('id')->on('clients');
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
        Schema::dropIfExists('orders');
    }
}
