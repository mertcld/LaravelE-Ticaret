<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
     function show(){
        $data = CategoryModel::all();
        return view ('hesap.admin.kategori.kategorigoruntule',['categories'=>$data]);
    }
}
