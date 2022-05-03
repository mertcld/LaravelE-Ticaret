<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class UrunController extends Controller
{
    function show(){
        $data = ProductModel::all();
        return view ('hesap.admin.urun.urungoruntule',['products'=>$data]);
    }

     public function changeSaleStatus(Request $request)
    {
        $members = ProductModel::find($request->id);
        $members->isSale = $request->isSale;
        $members->save();
    }

     public function changeStokStatus(Request $request)
    {
        $members = ProductModel::find($request->id);
        $members->haveStock = $request->haveStock;
        $members->save();
    }

    function index(Request $request){
       
        return view ('hesap.admin.urun.urunekle');
    }
    function updateindex(Request $request){
       
        return view ('hesap.admin.urun.urunguncelle');
    }
    function add(Request $request){

        $request -> validate([
            'name' => 'required',
            'price' => 'required',
            'quantity'=> 'required',
            'description' => 'required',
            'picture'=> 'required',
            'haveStock'=> 'required',
            'isSale'=> 'required',
            'categoryId' => 'required',
        ]);

        $query = DB::table('products') -> insert([
            'name' => $request-> input('name'),
            'price' => $request-> input('price'),
            'quantity'=> $request-> input('quantity'),
            'description' => $request-> input('description'),
            'picture'=> $request-> input('picture'),
            'haveStock'=> $request-> input('haveStock'),
            'isSale'=> $request-> input('isSale'),
            'categoryId' => $request-> input('categoryId')
        ]);

        if($query){
            return back() -> with('succes', 'Veri başarıyla kaydedildi');
        }else{
            return back()->with('fail', 'Bir şeyler yanlış gitti');
        }
        
    }

    public function edit($id)
    {

        $products = ProductModel::find($id);

        return view('hesap.admin.urun.urunguncelle', compact('products'));
    }
    
    public function update(Request $request, $id){

        $products = ProductModel::find($id);
        $products -> name = $request-> input('name');
        $products -> price = $request-> input('price');
        $products -> quantity = $request-> input('quantity');
        $products -> description = $request-> input('description');
        $products -> picture = $request-> input('picture');
        $products -> haveStock = $request-> input('haveStock');
        $products -> isSale= $request-> input('isSale');
        $products -> categoryId = $request-> input('categoryId');
        $products -> update();
        return back() -> with('succes', 'Ürün başarıyla güncellendi.');
    }

    public function delete ($id){
        $product = ProductModel::find($id);
        $product -> delete();
        return back() -> with('succes', 'Ürün başarıyla silindi!');
    }

    // public function save (Request $request){
        
    //     if($request->hasfile('picture')){
    //         $file = $request->file('picture');
    //         $name=time().$file->getClientOriginalName();
    //         $file->move(public_path('uploadimg'),$name);
            
        
    //     }

    //     $urun = new \App\Models\ProductModel();

    //     $urun -> name = $request ->get('name');
    //     $urun -> price = $request ->get('price');
    //     $urun -> quantity = $request ->get('quantity');
    //     $urun -> description = $request ->get('description');
    //     $urun -> picture = $name;
    //     $urun -> haveStock = $request ->get('haveStock');
    //     $urun -> isSale = $request ->get('isSale');
    //     $urun -> categoryId = $request ->get('categoryId');
    //     $urun -> save();

    // }
}
