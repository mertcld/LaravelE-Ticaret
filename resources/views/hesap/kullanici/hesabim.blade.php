@extends('layouts.default')
@section('css')
<title>Anasayfa - MeGi</title>


<link rel="icon" href="/images/favicon.png">


<link rel="stylesheet" href="/fonts/flaticon/flaticon.css">
<link rel="stylesheet" href="/fonts/icofont/icofont.min.css">
<link rel="stylesheet" href="/fonts/fontawesome/fontawesome.min.css">

<link rel="stylesheet" href="/css/vendor/nice-select.min.css">
<link rel="stylesheet" href="/css/vendor/venobox.min.css">
<link rel="stylesheet" href="/css/vendor/slick.min.css">
<link rel="stylesheet" href="/css/vendor/bootstrap.min.css">

<link rel="stylesheet" href="/css/custom/main.css">
<link rel="stylesheet" href="/css/custom/profile.css">
@stop



@section('content')
<section class="inner-section profile-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                           <h4>Hesap</h4>     
                            </div>
                              <form method="POST" action="{{ route('kullanici.profilUpdate') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="profile-image">
                                            <a href="#"><img src="images/user.png" alt="user"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <  <label class="form-label">Ad Soyad</label>
                                            <!-- Miron Mahmud vardı value kısmında -->
                                            <input class="form-control" type="text" value={{ $Adsoyad }} name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="email" value={{ $Email }} name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="profile-btn">
                                            <button class = "btn btn-success" type ="submit">Güncelle</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>İletişim Numarası</h4>
                                <button data-bs-toggle="modal" data-bs-target="#contact-add">İletişim Numarası Ekle</button>
                            </div>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card contact active">
                                            <h6>Birincil Telefon</h6>
                                            <p>+90 551 127 9958 </p>
                                            <ul>
                                                <li><button class="edit icofont-edit" title="Düzenle" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                                <li><button class="trash icofont-ui-delete" title="Sils" data-bs-dismiss="alert"></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Teslimat Adresi</h4>
                                <button data-bs-toggle="modal" data-bs-target="#address-add">Adres Ekle</button>
                            </div>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card address active">
                                            <h6>Ev</h6>
                                            <p>Cumhuriyet mahallesi Yüzyıl caddesi Bestegül sokak No 17/A İstanbul/Kartal</p>
                                            <ul class="user-action">
                                                <li><button class="edit icofont-edit" title="Düzenle" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                                <li><button class="trash icofont-ui-delete" title="Sil" data-bs-dismiss="alert"></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card address">
                                            <h6>Ofis</h6>
                                            <p>Akasya Acıbadem Evleri A3 Blok Kat 7 Ofis 8 Üsküdar/İstanbul</p>
                                            <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Düzenle" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                                <li><button class="trash icofont-ui-delete" title="Sil" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card mb-0">
                            <div class="account-title">
                                <h4>Ödeme Seçenekleri</h4>
                                <button data-bs-toggle="modal" data-bs-target="#payment-add">Kart Ekle</button>
                            </div>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="payment-card payment active">
                                            <img src="images/payment/png/01.png" alt="payment">
                                            <h4>Kart numarası</h4>
                                            <p>
                                                <span>****</span>
                                                <span>****</span>
                                                <span>****</span>
                                                <sup>1858</sup>
                                            </p>
                                            <h5>Mert Bulut</h5>
                                            <button class="trash icofont-ui-delete" title="Sil" data-bs-dismiss="alert"></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    PROFILE PART END
        =======================================-->


        <!--=====================================
                    MODAL ADD FORM START
        =======================================-->
        <!-- contact add form -->
        <div class="modal fade" id="contact-add">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>add new contact</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option selected>choose title</option>
                                <option value="primary">primary</option>
                                <option value="secondary">secondary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">number</label>
                            <input class="form-control" type="text" placeholder="Enter your number">
                        </div>
                        <button class="form-btn" type="submit">save contact info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- address add form -->
        <div class="modal fade" id="address-add">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>add new address</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option selected>choose title</option>
                                <option value="home">home</option>
                                <option value="office">office</option>
                                <option value="Bussiness">Bussiness</option>
                                <option value="academy">academy</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">address</label>
                            <textarea class="form-control" placeholder="Enter your address"></textarea>
                        </div>
                        <button class="form-btn" type="submit">save address info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- payment add form -->
        <div class="modal fade" id="payment-add">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>add new payment</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">card number</label>
                            <input class="form-control" type="text" placeholder="Enter your card number">
                        </div>
                        <button class="form-btn" type="submit">save card info</button>
                    </form>
                </div> 
            </div> 
        </div>
        <!--=====================================
                    MODAL ADD FORM END
        =======================================-->

        
        <!--=====================================
                    MODAL EDIT FORM START
        =======================================-->
        <!-- profile edit form -->
        <div class="modal fade" id="profile-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit profile info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">profile image</label>
                            <input class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <label class="form-label">name</label>
                            <input class="form-control" type="text" value="Miron Mahmud">
                        </div>
                        <div class="form-group">
                            <label class="form-label">email</label>
                            <input class="form-control" type="text" value="mironcoder@gmail.com">
                        </div>
                        <button class="form-btn" type="submit">save profile info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- contact edit form -->
        <div class="modal fade" id="contact-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit contact info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option value="primary" selected>primary</option>
                                <option value="secondary">secondary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">number</label>
                            <input class="form-control" type="text" value="+8801838288389">
                        </div>
                        <button class="form-btn" type="submit">save contact info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- address edit form -->
        <div class="modal fade" id="address-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit address info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option value="home" selected>home</option>
                                <option value="office">office</option>
                                <option value="Bussiness">Bussiness</option>
                                <option value="academy">academy</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">address</label>
                            <textarea class="form-control" placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea>
                        </div>
                        <button class="form-btn" type="submit">save address info</button>
                    </form>
                </div> 
            </div> 
        </div>

@stop

@section('js')

<script src="/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/js/vendor/popper.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/vendor/nice-select.min.js"></script>
        <script src="/js/vendor/venobox.min.js"></script>
        <script src="/js/vendor/countdown.min.js"></script>
        <script src="/js/vendor/slick.min.js"></script>

        <!-- CUSTOM -->
        <script src="/js/custom/nice-select.js"></script>
        <script src="/js/custom/countdown.js"></script>
        <script src="/js/custom/accordion.js"></script>
        <script src="/js/custom/venobox.js"></script>
        <script src="/js/custom/slick.js"></script>
        <script src="/js/custom/main.js"></script> 


    
        @stop