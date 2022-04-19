<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogOutController extends Controller
{
    public function index(){
        //Did session has  key name 'user' 
        if(Session::has('user'))
        {
            //Pull the key name 'user' from sesssion
            Session::pull('user');
            Session::pull('userName');
            return redirect(route('index'));
        }
        return "no";
    }
}
