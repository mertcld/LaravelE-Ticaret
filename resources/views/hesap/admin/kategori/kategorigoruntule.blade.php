@extends('layouts.admindefault')
    <head>
  <title>Kategoriler</title>
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
  <h2>Kategoriler</h2>
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Adı</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $categorie)
    <tr>
        <td>{{$categorie['id']}}</td>
        <td>{{$categorie['name']}}</td> 
        
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
    </div> 

@stop

