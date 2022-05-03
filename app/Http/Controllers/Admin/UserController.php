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

     public function changeMemberStatus(Request $request)
    {
        $members = KullanicilarModel::find($request->id);
        $members->is_active = $request->is_active;
        $members->save();
    }
}
