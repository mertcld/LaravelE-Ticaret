@extends('layouts.admindefault')
    
  <title>Ürünler</title>
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
  <h2>Ürünler</h2>
  <div style="float:right;margin:0 20px">
    <a class="btn btn-primary " href="{{url('/urun/ekle')}}">Ürün Ekle</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Ürün Id</th>
        <th>Ürün Adı</th>
        <th>Fiyat</th>
        <th>Adet</th>
        <th>Açıklama</th>
        <th>Resim</th>
        <th>Stokta mı</th>
        <th>Satışta mı</th>
        <th>Güncelle</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}} ₺</td>
        <td>{{$product['quantity']}}</td>
        <td>{{$product['description']}}</td>
        <td> <img width="60" height="60" src="{{$product['picture']}}" alt="resim"> </td>
         <td>
            <input data-id="{{$product->id}}" class="toggle-class" type="checkbox" data-onstyle="success"
                            data-offstyle="danger" data-toggle="toggle" data-on="Stokta" data-off="Stokta Değil"
                            {{ $product->haveStock ? 'checked' : '' }}>
            

        </td>
       <td>
            <input data-id="{{$product->id}}" class="toggle-class" type="checkbox" data-onstyle="success"
                            data-offstyle="danger" data-toggle="toggle" data-on="Satışta" data-off="Satışta Değil"
                            {{ $product->isSale ? 'checked' : '' }}>

            

        </td>
         <td>
            <div style="margin-bottom:5px;">
                <a href="{{url('urunguncelle/'. $product ->id)}}" class="btn btn-primary mr-2 " ><i class="fas fa-edit"></i></a>
            </div>            
            <form action = "{{url('/delete/'.$product->id)}}" method = "post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }} 
                <button class = "btn btn-danger  " type = "submit"><i class="fas fa-times "></i></button>
            </form>
        </td>
       
        
    </tr> 
    @endforeach
    </tbody>
  </table>
</div>

</body>
    </div> 

    <script>
    $ (document).ready(function(){
        $("#product").DataTable()
        });
    $ (function (){
        $('.toggle-class').change(function() {
            var isSale = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeSaleStatus',
                data: {'isSale':isSale, 'id': id},
                success: function(data){
                    console.log('Success')
                }
            })
        });
    });

</script>

<script>
    $ (function (){
        $('.toggle-class').change(function() {
            var haveStock = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStokStatus',
                data: {'haveStock':haveStock, 'id': id},
                success: function(data){
                    console.log('Success')
                }
            })
        });
    });


</script>
@stop

