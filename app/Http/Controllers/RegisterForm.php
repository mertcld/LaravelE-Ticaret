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

}
