<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KullanicilarModel;
use Illuminate\Support\Facades\Auth;

class HesapIslemleri extends Controller
{
    public function kayitol(){
        return View('hesap.kayitol');
      }
      public function registerpost(Request $request){
        KullanicilarModel::create([
            "name"=>$request->name,
            "email"=>$request->email, //virgül önemli olması lazım
            "password"=>$request->password,
        ]);
        return view('hesap.girisyap');
    }

    public function loginpost(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/index');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
