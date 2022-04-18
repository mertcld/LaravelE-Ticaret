<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HesapIslemleri;
use App\Models\KullanicilarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HesabimController extends Controller
{
     public function get(){
        
        $user = Session()->get('user');
        $kullanici=KullanicilarModel::where("id",$user->id)->first();

        $dizi = [
            "id"=>$kullanici->id,
            "Adsoyad"=>$kullanici->name,
            "Email"=>$kullanici->email,
          
        ];
        return view("hesap.kullanici.hesabim",$dizi);
        
    }

    public function update(Request $request)
    {
        $user = Session()->get('user');


    
            DB::table('kullanicilar')->where('id', $user->id)->update([
                "name" => $request->name,
                "email" => $request->email,

            ]);

        $user = DB::table('kullanicilar')->where('id', $user->id)->first();
        Session()->put('user', $user);
        # return redirect(route('admin.profile'));
        return back()->with('status', ['Başarılı!', 'success']);
    }


   
}
