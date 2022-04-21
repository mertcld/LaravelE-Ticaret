@extends('layouts.admindefault')
    <head>
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
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Fiyat</th>
        <th>Adet</th>
        <th>Açıklama</th>
        <th>Resim</th>
        <th>Stokta mı</th>
        <th>Satışta mı</th>

      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['quantity']}}</td>
        <td>{{$product['description']}}</td>
        <td>{{$product['picture']}}</td>
         <td>
            <input data-id = "{{$product -> id}}" class = "toggle-class" type = "checkbox"
            data-onstyle = "success" 
                data-offstyle = "danger" data-toggle ="toggle" data-on = "Stokta" data-off = "Stokta Değil"
                {{$product -> haveStock ? 'checked' : ''}}>
            

        </td>
       <td>
            <input data-id = "{{$product -> id}}" class = "toggle-class" type = "checkbox"
            data-onstyle = "success" 
                data-offstyle = "danger" data-toggle ="toggle" data-on = "Satışta" data-off = "Satışta Değil"
                {{$product -> isSale ? 'checked' : ''}}>
            

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
            var status = $(this).prop('checked') == true ? 1 : 0;
            var product_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changestatus',
                data: {'isSale':status, 'id': product_id},
                success: function(data){
                    console.log('Success')
                }
            })
        });
    });

</script>

<script>
    $ (document).ready(function(){
        $("#product").DataTable()
        });
    $ (function (){
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var product_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changestatus',
                data: {'haveStock':status, 'id': product_id},
                success: function(data){
                    console.log('Success')
                }
            })
        });
    });


</script>
@stop

