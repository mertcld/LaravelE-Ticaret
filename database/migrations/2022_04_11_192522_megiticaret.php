<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('productId');
            $table->integer('totalAmount');
            $table->integer('quantity');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('orderStatusId');
            $table->timestamps();



              //Foreign Key
              $table->foreign('productId')->references('id')->on('products');
              $table->foreign('userId')->references('id')->on('kullanicilar');
              $table->foreign('orderStatusId')->references('id')->on('orderstatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
