@extends('layouts.admindefault')
    <head>
  <title>Kullanıcılar</title>
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
  <h2>Kullanıcılar</h2>
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Durum</th>
      </tr>
    </thead>
    <tbody>
        @foreach($kullanicilar as $kullanici)
    <tr>
        <td>{{$kullanici['id']}}</td>
        <td>{{$kullanici['name']}}</td>
        <td>{{$kullanici['email']}}</td>
        <td>
            <input data-id = "{{$kullanici -> id}}" class = "toggle-class" type = "checkbox"
            data-onstyle = "success" 
                data-offstyle = "danger" data-toggle ="toggle" data-on = "Aktif" data-off = "Pasif"
                {{$kullanici -> is_active ? 'checked' : ''}}>
            

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
        $("#kullanici").DataTable()
        });
    $ (function (){
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var kullanici_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changestatus',
                data: {'is_active':status, 'id': kullanici_id},
                success: function(data){
                    console.log('Success')
                }
            })
        });
    });


</script>
   
@stop

