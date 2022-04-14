<?php
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VeritabaniIslemleri;
use App\Http\Controllers\ModelIslemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;
use App\Http\Controllers\HesapIslemleri;
use App\Http\Controllers\AdminHesapIslemleri;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SayfaController;

Route::redirect('/', '/index');
Route::get('/index', function () {
    return view('pages.index');
})->name('index');

//Route::get('/index',[SayfaController::class,'userindex'])->name('index');
Route::get('/magaza', function () {
    return view('pages.magaza');
})->name('magaza');

Route::get('/meyveler', function () {
    return view('kategoriler.meyveler');
});

Route::get('/meyvesuyu', function () {
    return view('kategoriler.meyvesuyu');
});

Route::get('/sebzeler', function () {
    return view('kategoriler.sebzeler');
});

Route::get('/yesillikler', function () {
    return view('kategoriler.yesillikler');
});



// Giriş ve Kayıt olma GET POST 
Route::get('/girisyap', function () {
    return view('hesap.kullanici.girisyap');
});
Route::get('/kayitol', function () {
    return view('hesap.kullanici.kayitol');
});
Route::post('hesap/girisyap',[HesapIslemleri::class,'loginpost'])->name('loginpost');
Route::get('/sifresifirla', function () {
    return view('hesap.kullanici.sifresifirla');
})->name('sifreSifirla');
Route::post('hesap/kayitol',[HesapIslemleri::class,'registerpost'])->name('registerpost');
// Giriş ve Kayıt olma GET POST 
//Çıkış yapma
Route::get('logout', [LogoutController::class, 'index'])->name('logout');


Route::get('/admin/girisyap', function () {
    return view('hesap.admin.girisyap');
});

Route::post('hesap/admin/girisyap',[AdminHesapIslemleri::class,'loginpost'])->name('adminloginpost');


Route::get('/hesabim', function () {
    return view('hesap.kullanici.hesabim');
})->name('hesabim');

//admin sayfaları

Route::get('/adminindex', function () {
    return view('pages.adminindex');
})->name('adminindex');
Route::get('/admin/sifresifirla', function () {
    return view('hesap.admin.sifresifirla');
})->name('adminSifreSifirla');



//veritabani işlemleri için crud
// Route::get('/kayitol',[VeritabaniIslemleri::class,'kayitol']);
// Route::middleware('sifrekontrol')->post('/kayitol-sonuc',[VeritabaniIslemleri::class,'ekle'])->name('kayitolsonuc'); 
// Route::get('/guncelle',[VeritabaniIslemleri::class,'guncelle']);
// Route::get('/sil',[VeritabaniIslemleri::class,'sil']);
// Route::get('/listele',[VeritabaniIslemleri::class,'bilgiler']);


//dosya yükleme
Route::get('/upload',function(){  // resim yada dosya upload
    return View('pages.upload');
});
Route::post('resim-ilet',[ResimYukle::class,'resimYukleme'])->name('resimYukle');
//


//model işlemleri için crud
Route::get('/modellistele',[ModelIslemleri::class,'listele']);
Route::get('/modelekle',[ModelIslemleri::class,'ekle']);
Route::get('/iletisim',[Iletisim::class,'index']);
Route::post('/iletisim-form',[Iletisim::class,'ekle'])->name('iletisimform'); 
