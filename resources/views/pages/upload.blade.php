<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
      <form action="{{route('resimYukle')}}" method="post" enctype="multipart/form-data">
          @csrf
          <label for="">Resim ekle</label> <br>
          <input type="file" name="resim"> <br>
          <input type="submit" name="ilet" value="Gönder">
      </form>  

</body>
</html>