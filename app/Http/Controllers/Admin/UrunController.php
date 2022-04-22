<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function index(Request $request){
       
        return view ('hesap.admin.urun.urunekle');
    }
    function add(Request $request){

        $request -> validate([
            'name' => 'required',
            'price' => 'required',
            'quantity'=> 'required',
            'description' => 'required',
            'picture'=> 'required',
            'haveStock'=> 'required',
            'isSale'=> 'required',
            'isDeleted' => 'required',
            'categoryId' => 'required',

        ]);

        $query = DB::table('products') -> insert([
            'name' => $request-> input('name'),
            'price' => $request-> input('price'),
            'quantity'=> $request-> input('quantity'),
            'description' => $request-> input('description'),
            'picture'=> $request-> input('picture'),
            'haveStock'=> $request-> input('haveStock'),
            'isSale'=> $request-> input('isSale'),
            'isDeleted' => $request-> input('isDeleted'),
            'categoryId' => $request-> input('categoryId')
        ]);

        if($query){
            return back() -> with('succes', 'Veri başarıyla kaydedildi');
        }else{
            return back()->with('fail', 'Bir şeyler yanlış gitti');
        }
        
    }
}
