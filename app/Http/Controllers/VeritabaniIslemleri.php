<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use  Illuminate\Support\Facades\DB;
class VeritabaniIslemleri extends Controller
{ 
    
    public function kayitol(){
      return View('hesap.kayitol');
    }
   public function ekle(Request $request){
   
    DB::table("bilgiler2")->insert([
        "metin"=>$request->email
    ]);
   
    }
    public function guncelle(){
        DB::table('bilgiler2')->where('id',1)->update([
            "metin"=>'bu alan güncellenmiştir'
        ]);
    }
    public function sil(){
        DB::table('bilgiler2')->where('id',2)->delete();
    }

    public function bilgiler(){
        // $veriler=DB::table("bilgiler2")->get();
        // foreach($veriler as $key => $value){
        //     echo $value->metin;
        //     echo '</br>';
        // }
       
        $veri=DB::table("bilgiler2")->where("id",3)->first();
        echo $veri->metin;

    }
}
