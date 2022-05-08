@extends('layouts.admindefault')
    <head>
  <title>Ürün Güncelle</title>
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
            <h4>Ürün Güncelle</h4>
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

            
            <form action = {{url('updateproduct/'.$products -> id)}} method = "post" >
                @method('PUT')
                @csrf
                <div class = "form-group">
                    <label for ="">Ürün Adı</label>
                    <input type = "text" class = "form-control" name = "name" value ="{{ $products->name }}" >
                    <span style = "color: red">@error('name'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Fiyat</label>
                    <input type = "text" class = "form-control" name = "price" placeholder="Ürün Fiyatı Giriniz" value = "{{ $products->price }}" >
                    <span style = "color: red">@error('price'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Adet</label>
                    <input type = "text" class = "form-control" name = "quantity" placeholder="Ürün Adeti Giriniz" value = "{{ $products->quantity }}" >
                    <span style = "color: red">@error('quantity'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Açıklama</label>
                    
                    <input type = "text" class = "form-control" name = "description" placeholder="Ürün Açıklaması Giriniz" value = "{{ $products->description }}" >
                    <span style = "color: red">@error('description'){{$message}} @enderror</span>
                </div>

                 <div class = "form-group">
                     <input type = "text" class = "form-control" name = "picture" placeholder="Fotoğraf Giriniz" value = "{{ $products->picture }}" >
                    <span style = "color: red">@error('picture'){{$message}} @enderror</span>
                    <!-- <label for="">Resim ekle</label> <br>
                    <input type="file" name="resim"> <br> -->
                </div>

                <div class = "form-group">
                    <label for ="">Stok Durumu </label>
                    <!-- <input type = "text" class = "form-control" name = "haveStock" placeholder="Ürün Stok Durumu Giriniz" value = "{{ old('haveStock')}}" > -->
                    <select id="haveStock" name = "haveStock">
                        <option value="Seçim Yap" disabled>Seçiniz</option>
                        <option value="1" selected>Stokta</option>
                        <option value="0">Stokta Değil</option>
                    </select>
                    
                    <!-- <input type = "checkbox" value="true" name = "haveStock" placeholder="Ürün Stok Durumu Giriniz" > -->
                    <span style = "color: red">@error('haveStock'){{$message}} @enderror</span>
                </div>

                <div class = "form-group">
                    <label for ="">Satış Durumu </label>
                    <!-- <input type = "text" class = "form-control" name = "isSale" placeholder="Ürün Satış Durumu Giriniz" value = "{{ old('isSale')}}" > -->
                    <!-- <input type = "checkbox" value="true" name = "isSale" placeholder="Ürün Satış Durumu Giriniz"  > -->
                   <select id="isSale" name = "isSale">
                        <option value="Seçim Yap" disabled>Seçiniz</option>
                        <option value="1" selected>Satışta</option>
                        <option value="0 ">Satışta Değil</option>
                    </select>
                    <span style = "color: red">@error('isSale'){{$message}} @enderror</span>
                </div>
  
                  <div class = "form-group">
                    <label for ="">Kategori ID</label>
                    <input type = "text" class = "form-control" name = "categoryId" placeholder="Kategory Id Giriniz" value = "{{ $products->categoryId }}"  >
                    <span style = "color: red">@error('categoryId'){{$message}} @enderror</span>
                </div>

                

            <div class = "form-group">
                <button type ="submit" class = "btn btn-priary btn-block">Güncelle</button>
                    
            </div>

        </form>
    </div>
</div>
</div>

</body>
    </div> 

@stop

