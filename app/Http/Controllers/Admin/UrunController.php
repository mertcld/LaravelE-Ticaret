<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    function show(){
        $data = ProductModel::all();
        return view ('hesap.admin.urun.urungoruntule',['products'=>$data]);
    }

    function changeMemberStatus(Request $request){

        $products = ProductModel::find($request->id);
        $products->is_active = $request -> status;
        $products -> save();


    }
}
