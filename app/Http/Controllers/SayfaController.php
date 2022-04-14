<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KullanicilarModel;
use App\Models\AdminModel;
use Illuminate\Contracts\Session\Session as SessionSession;
use Cookie;
use Tracker;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class SayfaController extends Controller
{

    public function userindex(){ 
        $user = Session()->get('user');
        $veriler=DB::table("categories")->get();

       
        $dizi = [
            "girisYapildiMi"=>1,
            "categories"=>$veriler,
            "user_name"=>$user->name,
        ];
        return View('pages.index',$dizi);
      }
     
}
