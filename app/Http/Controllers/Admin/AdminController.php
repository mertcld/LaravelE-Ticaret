<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\OrdersModel;
use App\Models\KullanicilarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function get(){
        $data = CategoryModel::all()->count();
        $data2 = ProductModel::all()->count();
        $data3 = OrdersModel::all()->count();
        $data4 = KullanicilarModel::all()->count();
        $dizi = [
            "data"=>$data,
            "data2"=>$data2,
            "data3"=>$data3,
            "data4"=>$data4,
             
          
        ];
        
        return view ('pages.adminindex',$dizi);
    }
     


 

   

   

   
}

