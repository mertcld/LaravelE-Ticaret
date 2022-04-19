<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    public function getLogin(){
        return view('hesap.admin.girisyap');
    }
    public function postLogin(Request $request){
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        auth() -> attempt([
            'email' => $request -> email,
            'password' => $request -> password,
            'is_admin '=> 1
        ]);

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
         


            return redirect()->route('index',$dizi );
        } else {
            return redirect() ->back()->with('message', 'Şifre Yanlış!');
        }

        
    }
}
