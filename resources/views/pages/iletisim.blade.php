<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletisim</title>
</head>
<body>

<form action="{{route('iletisimform')}}" method="POST"> 
    @csrf

    <input type="text" placeholder="ad soyad" name="adsoyad"><br>
    <input type="mail" placeholder="mail" name="mail"><br>
    <input type="tel" placeholder="telefon" name="telefon"><br>
    <input type="text" placeholder="metin" name="metin"><br>
    <input type="submit"  name="ilet" value="gönder">
</form>    

</body>
</html>