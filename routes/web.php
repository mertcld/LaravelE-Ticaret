

<?php
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SiparisController;
use App\Http\Controllers\Admin\UrunController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\KategoriController;

use App\Http\Controllers\HesabimController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordResetController;

use App\Http\Controllers\VeritabaniIslemleri;
use App\Http\Controllers\ModelIslemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;
use App\Http\Controllers\HesapIslemleri;
use App\Http\Controllers\AdminHesapIslemleri;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SayfaController;
use App\Http\Controllers\MagazaController;
use App\Http\Controllers\SepetController;
use App\Models\KullanicilarModel;

Route::redirect('/', '/index');
// Route::get('/index', function () {
//     return view('pages.index');
// })->name('index');

Route::get('/index',[SayfaController::class,'userindex'])->name('index');
// Route::get('/magaza', function () {
//     return view('pages.magaza');
// })->name('magaza');

Route::get('/magaza',[MagazaController::class,'magazaGet'])->name('magaza');

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
})->name('sifresifirlaKullanici');
Route::post('hesap/kayitol',[HesapIslemleri::class,'registerpost'])->name('registerpost');
// Giriş ve Kayıt olma GET POST 
//Çıkış yapma
Route::get('logout', [LogoutController::class, 'index'])->name('logout');


Route::get('/admin/girisyap', function () {
    return view('hesap.admin.girisyap');
});

Route::post('hesap/admin/girisyap',[AdminHesapIslemleri::class,'loginpost'])->name('adminloginpost');


Route::get('/hesabim', [HesabimController::class,'get'])->name('hesabim');

// profile update

Route::post('hesabim',[HesabimController::class,'update'])->name('kullanici.profilUpdate');

//admin sayfaları

Route::get('/adminindex', [AdminController::class,'get'])->name('adminindex');
 
// Route::get('/admin/sifresifirla', function () {
//     return view('hesap.admin.sifresifirla');
// })->name('adminSifreSifirla');



// kullanici sifre sifirlama 
Route::get('/sifresifirlaa', function () {
    return view('hesap.kullanici.sifresifirla');
})->name('sifresifirlaKullanicix');
Route::post('/sifresifirla-postKullanici', [PasswordResetController::class, 'kullanici_new_password'])->name('sifresifirla-postKullanici');

// admin sifre sifirlama
Route::get('/sifresifirla', function () {
    return view('hesap.admin.sifresifirla');
})->name('sifresifirlaAdmin');
Route::post('/sifresifirla-postAdmin', [PasswordResetController::class, 'admin_new_password'])->name('sifresifirla-postAdmin');

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


// admin paneli kullanici sayfasi

Route::get('/kullanicigoruntule',[UserController::class, 'show']);
Route::get('/changeStatus',[UserController::class,'changeMemberStatus'])->name('changeStatus');
Route::get('/changeStokStatus',[UrunController::class,'changeStokStatus'])->name('changeStokStatus');
Route::get('/changeSaleStatus',[UrunController::class,'changeSaleStatus'])->name('changeSaleStatus');


Route::get('/kategorigoruntule',[KategoriController::class, 'show']);


// admin paneli siparis sayfasi

Route::get('/siparisgoruntule',[SiparisController::class, 'show']);

// admin paneli urun sayfasi

Route::get('/urungoruntule',[UrunController::class, 'show']);

//kategori ekle
Route::get('/kategori/ekle',[KategoriController::class, 'index']);
Route::post('/kategoriekle',[KategoriController::class, 'add'])->name('kategoriekle');

//urun ekle
Route::get('/urun/ekle',[UrunController::class, 'index']);
Route::post('/urun/ekle',[UrunController::class, 'add'])->name('urunekle'); 


//urun guncelleme
Route::get('urunguncelle/{id}',[UrunController::class, 'edit']);
Route::put('updateproduct/{id}',[UrunController::class, 'update']);

//kategori güncelleme
Route::get('kategoriguncelle/{id}',[KategoriController::class, 'edit']);
Route::put('updatecategorie/{id}',[KategoriController::class, 'update']);

//silme islemi
Route::delete('/delete/{id}',[UrunController::class, 'delete']);
Route::delete('/deletekategori/{id}',[KategoriController::class, 'delete']);



Route::get('users', [UserController::class,'index']);


Route::get('/sepet', [SepetController::class,'sepetGet'])->name('sepet');
Route::get('/invoice', [SepetController::class,'invoiceGet'])->name('invoice');

Route::post('/sepet',[SepetController::class, 'siparistamamla'])->name('siparistamamla'); 