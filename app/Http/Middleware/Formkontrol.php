<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Formkontrol
{
   
    public function handle(Request $request, Closure $next)
    {

        if($request->sifre1==$request->sifre2){
             return $next($request);
        }
        else{
            return redirect()->back();
        }
      
    }
}
