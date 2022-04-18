<?php

namespace App\Http\Controllers;

use App\Models\KullanicilarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordMail;

class PasswordResetController extends Controller
{
    public function kullanici_forgot(){
    return view('hesap.kullanici.sifresifirla');
  }


  public function kullanici_new_password(Request $request){
    $kullanici = KullanicilarModel::where('email', $request->email)->first();
    $mail = $request->email;
    $rand=rand(10000,99999);

    if($kullanici == null){
      return redirect()->back()->with(['error' => 'Bu mail sistemde kayıtlı değil']);
    }

    KullanicilarModel::where('email', $request->email)->update([
    'password'=>Hash::make($rand)
    ]);

    Mail::to($mail) -> send(new PasswordMail($rand));

    return redirect('/girisyap')->with(['success' => 'Yeni şifre gönderildi']);

  }



}
