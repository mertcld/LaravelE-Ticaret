<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="author" content="mertcloud">
<meta name="email" content="mrtebulute@gmail.com">




<meta name="title" content="MeGi - Online Alışveriş">
<meta name="keywords" content="megi, organik, yemek, sebze, meyve, dükkan, eticaret, organik sebze, organik meyve">

        <title>MeGi - Kayıt Ol</title>

        <link rel="icon" href="/images/favicon.png">

        <link rel="stylesheet" href="/fonts/icofont/icofont.min.css">

        <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">

        <link rel="stylesheet" href="/css/custom/main.css">
        <link rel="stylesheet" href="/css/custom/user-form.css">
  
    </head>
    <body>

        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                        <div class="user-form-logo">
                            <a href="/index"><img src="/images/logo.png" alt="logo"></a>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>Aramıza Katıl!</h2>
                                <p>Hemen kayıt olabilirsin!</p>
                            </div>
                            <form  action="{{route('registerpost')}}" method='post' class="user-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Ad Soyad">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Mail adresiniz">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Şifre">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password2" class="form-control" placeholder="Şifre tekrarı">
                                </div>
                                <div class="form-button">
                                    <button type="submit">Kayıt Ol</button>
                                </div>
                            </form>
                        </div>
                        <div class="user-form-remind">
                            <p>Zaten Hesabın Var mı?<a href="{{url('/girisyap')}}">Giriş Yap</a></p>
                        </div>
                        <div class="user-form-footer">
                        <p>MeGi | &COPY; Tüm hakları saklıdır.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <script src="/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/js/vendor/popper.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
     
    </body>
</html>