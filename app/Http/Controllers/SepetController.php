<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KullanicilarModel;
use App\Models\AdminModel;
use Illuminate\Contracts\Session\Session as SessionSession;
use Cookie;
Use Carbon\Carbon;
use Tracker;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class SepetController extends Controller
{

    public function sepetGet(){ 
        $user = Session()->get('user');
        $data = CategoryModel::all();
        $data2= ProductModel::all();
        $data3= ProductModel::all()->count();
        $dizi = [
            
            "categories"=>$data,
            "products"=>$data2,
            "categoriesCount"=>$data3,
        ];
        return View('pages.sepet',$dizi);
      }
      public function invoiceGet(){ 
        $user = Session()->get('user');
        $data = CategoryModel::all();
        $data2= ProductModel::all();
        $data3= ProductModel::all()->count();
        $dizi = [
            
            "categories"=>$data,
            "products"=>$data2,
            "categoriesCount"=>$data3,
        ];
        return View('pages.invoice',$dizi);
      }

      function siparistamamla(Request $request){
        $user = Session()->get('user');

        $query = DB::table('orders') -> insert([
            'product_id' => 15,
            'totalAmount' => 59,
            'quantity'=> 5,
            'user_Id'=>$user->id,
            'orderStatus_Id'=>1,
            'created_at'=>Carbon::now()->toDateTimeString()
          
        ]);

        if($query){
          return redirect('/invoice')->with(['success' => 'Sipariş başarılı şekilde verildi.']);
             
        }else{
            return back()->with('fail', 'Bir şeyler yanlış gitti');
        }
        
    }
     
}
