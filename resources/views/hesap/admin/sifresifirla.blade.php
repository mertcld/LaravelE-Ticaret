<!DOCTYPE html>
<html lang="tr">
    <head>
   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="template" content="Organe"> 
        <meta name="title" content="Admin Şifre Sıfırlama">
      
        <title>Admin Şifre Sıfırlama</title>

   
        
        <link rel="icon" href="/images/favicon.png">

      
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
                            <a href="index.html"><img src="https://foto.sondakika.com/haber/2014/01/02/kou-de-uluslararasi-iletisim-bilimi-ve-medya-5497945_9370_o.jpg" alt="logo"></a>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2> Şifre Sıfırlama</h2>
                                <p>Admin şifre sıfırlama çok basit!</p>
                            </div>
                            <form action="{{url('/sifresifirla-post')}}" method="post">
                            @csrf
                            <form class="user-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email adresinizi giriniz.." name = "email">
                                </div>
                                <div class="form-button">
                                    <button type="submit">Sıfırla</button>
                                </div>
                            </form>
                        </div>
                        <div class="user-form-remind">
                            <p>Geri Dön <a href="{{url('/admin/girisyap')}}">Giriş Yap</a></p>
                        </div>
                        <div class="user-form-footer">
                            <p>KOU | &COPY; Copyright by <a href="#">KOU</a></p>
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