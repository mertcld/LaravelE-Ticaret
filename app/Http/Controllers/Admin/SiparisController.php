<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrdersModel;
use Illuminate\Http\Request;

class SiparisController extends Controller
{
    function show(){
        $data = OrdersModel::all();
        return view ('hesap.admin.siparis.siparisgoruntule',['orders'=>$data]);
    }
  
}
