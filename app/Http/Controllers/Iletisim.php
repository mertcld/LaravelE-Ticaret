<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IletisimModel;

class Iletisim extends Controller
{
    function index(){
        return view('pages.iletisim');
    }

    function ekle(Request $request){
        IletisimModel::create([
            "metin"=>$request->metin,
            "adsoyad"=>$request->adsoyad,
            "telefon"=>$request->telefon,
            "mail"=>$request->mail,
        ]);
        echo 'Bilgileriniz gönderilmiştir. En kısa sürede iletişime geçilecektir.';
    }
}
