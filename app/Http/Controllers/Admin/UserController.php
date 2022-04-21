<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KullanicilarModel;

class UserController extends Controller
{
    // function index(){

    //     $data['tum_kullanicilar'] = KullanicilarModel::get();
    //     return view('kullanicigoruntuler',$data);
    //    return DB::select("select * from kullanicilar");
    // }

    function show(){
        $data = KullanicilarModel::all();
        return view ('hesap.admin.kullanicigoruntule',['kullanicilar'=>$data]);
    }

    function changeMemberStatus(Request $request){

        $kullanicilar = KullanicilarModel::find($request->id);
        $kullanicilar->is_active = $request -> status;
        $kullanicilar -> save();


    }
}
