    <!DOCTYPE html>
    <html lang="tr">
        <head>
        
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="mertcloud">
    <meta name="email" content="mrtebulute@gmail.com">




    <meta name="title" content="MeGi - Online Alışveriş">
    <meta name="keywords" content="megi, organik, yemek, sebze, meyve, dükkan, eticaret, organik sebze, organik meyve">

            <title>MeGi - Giriş</title>

        
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
                                <a href="#"><img src="/images/logo.png" alt="logo"></a>
                            </div>
                            <div class="user-form-card">
                                <div class="user-form-title">
                                    <h2>Hoşgeldin!</h2>
                                    <p>Giriş Yapmak İçin Bilgilerini Gir</p>
                                </div>
                                <form class="user-form" method="post" action="{{route('loginpost')}}">
                                    @csrf

                                
                                    <div class="my-3">
                                    @if(session()->has('message'))
                                
                                <div class="alert alert-danger text-center">
                                {{ session()->get('message') }}
                                </div>
                                @endif
                        </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="megi@girisyap.com">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="********">
                                    </div>
                                    <div class="form-button">
                                        <button type="submit">Giriş Yap</button>
                                        <p>Şifreni mi unuttun?<a href="{{url('sifresifirla')}}">Şifreni Sıfırla</a></p>
                                    </div>
                                </form>
                            </div>
                            <div class="user-form-remind">
                                <p>Hesabın yok mu?<a href="{{url('kayitol')}}">Kayıt Ol</a></p>
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