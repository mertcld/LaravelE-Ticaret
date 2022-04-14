<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterForm extends Controller
{
    public function kayitol(){
        return View('hesap.kayitol');
    }

    public function kayitolsonuc(Request $request){
         
        
        return $request->email;
    }
<<<<<<< HEAD
=======



>>>>>>> 45c15360ecbd2e2d0ecb704d3e254c5574c02958
}
