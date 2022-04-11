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
            $table->unsignedBigInteger('product_Id');
            $table->integer('totalAmount');
            $table->integer('quantity');
            $table->unsignedBigInteger('user_Id');
            $table->unsignedBigInteger('orderStatus_Id');
            $table->timestamps();

              //Foreign Key
              $table->foreign('product_Id')->references('id')->on('products');
              $table->foreign('user_Id')->references('id')->on('kullanicilar');
              $table->foreign('orderStatus_Id')->references('id')->on('orderstatus');
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
};
