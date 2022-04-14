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
class HesapIslemleri extends Controller
{

    public $request,$user,$route;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function kayitol(){
        return View('hesap.kayitol');
      }
      public function registerpost(Request $request){
        KullanicilarModel::create([
            "name"=>$request->name,
            "email"=>$request->email, //virgül önemli olması lazım
            "password"=>Hash::make($request->password),
        ]);
        return view('hesap.girisyap');
    }

    public function loginpost(Request $request){
        
        $user = KullanicilarModel::where('email', $request->email)->first();
        if($user)
        {
            $this->user=$user;
            
            return $this->check();
        } 
        else {
            return redirect() ->back()->with('message', 'Eposta Yanlış!!');
        }
 
    }
    
    
   
    public function check(){
        $request=$this->request;
        $user=$this->user;
        $route=$this->route;
        $dizi = [
           
            "user_name"=>$user->name,
            
        ];
        //Check password the user
        if(Hash::check($request->password,$user->password))
        {
            //Put a create user from session   
            $request->session()->put('user',$user);
            Session::put('username', $user->name);



            return redirect()->route('index',$dizi);
        } else {
            return redirect() ->back()->with('message', 'Şifre Yanlış!');
        }

        
    }
}
