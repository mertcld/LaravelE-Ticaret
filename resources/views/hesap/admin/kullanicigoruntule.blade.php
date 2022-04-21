@extends('layouts.admindefault')
    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
                data-offstyle = "danger" data-toggle ="toggle" data-on = "Active" data-off = "Inactive"
                {{$kullanici -> status ? 'checked' : ''}}>
            

        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
    </div> 
   
@stop