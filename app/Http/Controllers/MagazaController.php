<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KullanicilarModel;
use App\Models\AdminModel;
use Illuminate\Contracts\Session\Session as SessionSession;
use Cookie;
use Tracker;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class MagazaController extends Controller
{

    public function magazaGet(){ 
        $user = Session()->get('user');
        $data = CategoryModel::all();
        $data2= ProductModel::all();
        $data3= ProductModel::all()->count();
        $dizi = [
            
            "categories"=>$data,
            "products"=>$data2,
            "categoriesCount"=>$data3,
        ];
        return View('pages.magaza',$dizi);
      }
     
}
