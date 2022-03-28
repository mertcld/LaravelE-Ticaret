<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VeritabaniIslemleri;
use App\Http\Controllers\ModelIslemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;
use App\Http\Controllers\HesapIslemleri;
Route::redirect('/', '/index');
Route::get('/index', function () {
    return view('pages.index');
});
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

Route::get('/girisyap', function () {
    return view('hesap.girisyap');
});
Route::get('/kayitol', function () {
    return view('hesap.kayitol');
});
Route::post('hesap/girisyap',[HesapIslemleri::class,'loginpost'])->name('loginpost');



Route::post('hesap/kayitol',[HesapIslemleri::class,'registerpost'])->name('registerpost');

Route::get('/sifresifirla', function () {
    return view('hesap.sifresifirla');
});
Route::get('/hesabim', function () {
    return view('hesap.hesabim');
});





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
