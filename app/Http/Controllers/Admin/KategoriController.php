<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
     function show(){
        $data = CategoryModel::all();
        return view ('hesap.admin.kategori.kategorigoruntule',['categories'=>$data]);
    }
     function index(Request $request){
       
        return view ('hesap.admin.kategori.kategoriekle');
    }
    function add(Request $request){

        $request -> validate([
            'name' => 'required'
        ]);

        $query = DB::table('categories') -> insert([
            'name' => $request-> input('name')
        ]);

        if($query){
            return back() -> with('succes', 'Veri başarıyla kaydedildi');
        }else{
            return back()->with('fail', 'Bir şeyler yanlış gitti');
        }
        
    }
}

