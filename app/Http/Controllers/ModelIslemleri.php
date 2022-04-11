<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;
class ModelIslemleri extends Controller
{
    public function listele(){
        //$bilgi=Bilgiler::get();
        //$bilgi=Bilgiler::where('id',4)->first();
        $bilgi=Bilgiler::find(4);
        echo $bilgi->metin;
    }

    public function ekle(){
        Bilgiler::create([
            "metin"=>"Model dosyasından eklendi 2", //virgül önemli olması lazım
        ]);
    }

    public function guncelle(){
        Bilgiler::whereId(5)->update()([
            "metin"=>"Model dosyasından güncellendi", //virgül önemli olması lazım
        ]);
    }

    public function sil(){
        Bilgiler::whereId(5)->delete();
    }
}
