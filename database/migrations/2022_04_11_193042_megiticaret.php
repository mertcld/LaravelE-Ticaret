<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\OrderStatusModel;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderstatus', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->timestamps();
          
        }); 
        $statuss=['Yeni Sipariş','Onaylandı','Sipariş Hazırlanıyor',"Sipariş Kargoda","Sipariş Teslim Edildi"];
        foreach($statuss as $status)
        {
            OrderStatusModel::create([
                'value'=> $status,
             ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderstatus');
    }
};
