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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('quantity');
            $table->string('description');
            $table->string('picture');
            $table->boolean('haveStock'); // 1 ise var 0 ise yok
            $table->boolean('isSale'); // 1 ise satışta 0 ise değil
            $table->boolean('isDeleted')->nullable(); // 1 ise silindi 0 yada null ise silinmedi
            $table->unsignedBigInteger('categoryId');
            $table->timestamps();


            $table->foreign('categoryId')->references('id')->on('categories');
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
};
