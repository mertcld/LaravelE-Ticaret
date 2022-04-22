@extends('layouts.admindefault')
    <head>
  <title>Kategori Ekle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>

@section('content')
   
    <div class="height-100 bg-light">
        
<body>
    

<div class="container">
    <div class = "row">
        <div class = "col-md-6 col-md-offset-3" >
            <h4>Ürün Ekle</h4>
            <hr>

            @if(Session::get('succes'))
            <div class = "alert alert-success">
                {{Session::get('succes')}}
            </div>
            @endif

            @if(Session::get('fail'))
            <div class = "alert alert-success">
                {{Session::get('fail')}}
            </div>
            @endif

            
            <form action = {{route('urunekle')}} method = "post" >
                @csrf
                <div class = "form-group">
                    <label for ="">Ürün Adı</label>
                    <input type = "text" class = "form-control" name = "name" placeholder="Ürün Adı Giriniz" value = "{{ old('name')}}" >
                    <span style = "color: red">@error('name'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Fiyat</label>
                    <input type = "text" class = "form-control" name = "price" placeholder="Ürün Fiyatı Giriniz" value = "{{ old('price')}}" >
                    <span style = "color: red">@error('price'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Adet</label>
                    <input type = "text" class = "form-control" name = "quantity" placeholder="Ürün Adeti Giriniz" value = "{{ old('quantity')}}" >
                    <span style = "color: red">@error('quantity'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Açıklama</label>
                    
                    <input type = "text" class = "form-control" name = "description" placeholder="Ürün Açıklaması Giriniz" value = "{{ old('description')}}" >
                    <span style = "color: red">@error('description'){{$message}} @enderror</span>
                </div>

                 <div class = "form-group">
                    <label for ="">Resim</label>
                    <input type = "text" class = "form-control" name = "picture" placeholder="Fotoğraf Yükleyiniz" value = "{{ old('picture')}}" >
                    <span style = "color: red">@error('picture'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Stok Durumu </label>
                    <input type = "checkbox" class = "toggle-class" data-onstyle = "success" 
                data-offstyle = "danger" data-toggle ="toggle" data-on = "Stokta" data-off = "Stokta Değil" name = "haveStock" placeholder="Ürün Stok Durumu Giriniz" value = "{{ old('haveStock')}}" >
                    <span style = "color: red">@error('haveStock'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Satış Durumu </label>
                    <input type = "checkbox" class = "toggle-class" data-onstyle = "success" 
                data-offstyle = "danger" data-toggle ="toggle" data-on = "Satışta" data-off = "Satışta Değil" name = "isSale" placeholder="Ürün Satış Durumu Giriniz" value = "{{ old('isSale')}}" >
                    <span style = "color: red">@error('isSale'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Silinme Durumu</label>
                   <input type = "checkbox" class = "toggle-class" data-onstyle = "success" 
                data-offstyle = "danger" data-toggle ="toggle" data-on = "Silindi" data-off = "Silinmedi" name = "isDeleted" placeholder="Ürün Silinme Durumu Giriniz" value = "{{ old('isDeleted')}}" >
                    <span style = "color: red">@error('isDeleted'){{$message}} @enderror</span>
                </div>

                  <div class = "form-group">
                    <label for ="">Kategory ID</label>
                    <input type = "text" class = "form-control" name = "categoryId" placeholder="Kategory Id Giriniz" value = "{{ old('isDeleted')}}" >
                    <span style = "color: red">@error('isDeleted'){{$message}} @enderror</span>
                </div>

                

            <div class = "form-group">
                <button type ="submit" class = "btn btn-priary btn-block">Ekle</button>
                    
            </div>

        </form>
    </div>
</div>
</div>

</body>
    </div> 

@stop

