@extends('layouts.default')
@section('css')
<title>Sepetim - MeGi</title>

<!--=====================================
            CSS LINK PART START
=======================================-->
<!-- FAVICON -->
<link rel="icon" href="/images/favicon.png">
<link rel="stylesheet" href="/fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="/fonts/icofont/icofont.min.css">
        <link rel="stylesheet" href="/fonts/fontawesome/fontawesome.min.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="/css/vendor/nice-select.min.css">
        <link rel="stylesheet" href="/css/vendor/venobox.min.css">
        <link rel="stylesheet" href="/css/vendor/slick.min.css">
        <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="/css/custom/main.css">
        <link rel="stylesheet" href="/css/custom/checkout.css">
@stop


@section('content')
<div class="modal fade" id="product-view">
            <div class="modal-dialog"> 
                <div class="modal-content">
                    <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                    <div class="product-view">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="view-gallery">
                                    <div class="view-label-group">
                                        <label class="view-label new">new</label>
                                        <label class="view-label off">-10%</label>
                                    </div>
                                    <ul class="preview-slider slider-arrow"> 
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                    </ul>
                                    <ul class="thumb-slider">
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="view-details">
                                    <h3 class="view-name">
                                        <a href="product-video.html">existing product name</a>
                                    </h3>
                                    <div class="view-meta">
                                        <p>SKU:<span>1234567</span></p>
                                        <p>BRAND:<a href="#">radhuni</a></p>
                                    </div>
                                    <div class="view-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3 reviews)</a>
                                    </div>
                                    <h3 class="view-price">
                                        <del>$38.00</del>
                                        <span>$24.00<small>/per kilo</small></span>
                                    </h3>
                                    <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit fuga</p>
                                    <div class="view-list-group">
                                        <label class="view-list-title">tags:</label>
                                        <ul class="view-tag-list">
                                            <li><a href="#">organic</a></li>
                                            <li><a href="#">vegetable</a></li>
                                            <li><a href="#">chilis</a></li>
                                        </ul>
                                    </div>
                                    <div class="view-list-group">
                                        <label class="view-list-title">Share:</label>
                                        <ul class="view-share-list">
                                            <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                            <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                            <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                            <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                        </ul>
                                    </div>
                                    <div class="view-add-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="view-action-group">
                                        <a class="view-wish wish" href="#" title="Add Your Wishlist">
                                            <i class="icofont-heart"></i>
                                            <span>add to wish</span>
                                        </a>
                                        <a class="view-compare" href="compare.html" title="Compare This Item">
                                            <i class="fas fa-random"></i>
                                            <span>Compare This</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
        <!--=====================================
                    PRODUCT VIEW END
        =======================================-->


        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner">
            <div class="container">
                <h2>Sepet</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                     
                    <li class="breadcrumb-item active" aria-current="page">Sepet</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    CHECKOUT PART START
        =======================================-->
        <section class="inner-section checkout-part">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Sepet</h4>
                            </div>
                            <div class="account-content">
                                <div class="table-scroll">
                                    <table class="table-list">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Ürün</th>
                                                <th scope="col">Adı</th>
                                                <th scope="col">Fiyat</th>
                                                 
                                                <th scope="col">Miktar</th>
                                                <th scope="col">İşlem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table-serial"><h6>01</h6></td>
                                                <td class="table-image"><img src="images/product/01.jpg" alt="product"></td>
                                                <td class="table-name"><h6>ürün adı</h6></td>
                                                <td class="table-price"><h6> 19 ₺<small>/kilo</small></h6></td>
                                               
                                                <td class="table-quantity"><h6>3</h6></td>
                                                <td class="table-action">
                                                    <a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                                    <a class="trash" href="#" title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td class="table-serial"><h6>02</h6></td>
                                                <td class="table-image"><img src="images/product/01.jpg" alt="product"></td>
                                                <td class="table-name"><h6>ürün adı</h6></td>
                                                <td class="table-price"><h6> 29 ₺<small>/kilo</small></h6></td>
                                               
                                                <td class="table-quantity"><h6>5</h6></td>
                                                <td class="table-action">
                                                    <a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                                    <a class="trash" href="#" title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                                </td>
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="chekout-coupon">
                                    <button class="coupon-btn">Kupon kodun mu var?</button>
                                    <form class="coupon-form">
                                        <input type="text" placeholder="Kupon kodunu giriniz.">
                                        <button type="submit"><span>Uygula</span></button>
                                    </form>
                                </div>
                                <div class="checkout-charge">
                                    <ul>
                                        <li>
                                            <span>Ara Toplam</span>
                                            <span>55 ₺</span>
                                        </li>
                                        <li>
                                            <span>Teslimat Ücreti</span>
                                            <span> 10 ₺</span>
                                        </li>
                                        <li>
                                            <span>İnidirim</span>
                                            <span>0 ₺</span>
                                        </li>
                                        <li>
                                            <span>Toplam </span>
                                            <span>65 ₺</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Teslim Tarihi</h4>
                            </div>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card contact active">
                                            <h6>Anında Teslim</h6>
                                            <p>Hızlı kurye ile 90 dakikada teslimat!</p>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card contact">
                                            <h6>Ertesi Gün Teslim</h6>
                                            <p>Siparişten sonraki gün teslim!</p>
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
                                <button data-bs-toggle="modal" data-bs-target="#contact-add">Ekle</button>
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
                            <div class="checkout-check">
                            <input type="checkbox" id="checkout-check">
                            <label for="checkout-check"> <a href="#">Kullanıcı sözleşmesini</a> kabul ediyorum.</label>
                        </div>
                        <div class="checkout-proced">
                            <a href="{{route('invoice')}}" class="btn btn-inline">Siparişi Tamamla</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                </div>
            </div>
        </section>
        <!--=====================================
                    CHECKOUT PART END
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
        <!--=====================================
                    MODAL EDIT FORM END
        =======================================-->


        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
        <section class="news-part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">
                            <h2> 20% İndirim İçin Abone Olun</h2>
                            <p>Yeniliklerden ilk sizin haberiniz olsun!</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <form class="news-form" action="{{route('iletisimform')}}" method="POST"> 
                @csrf
                            <input type="text" name="mail" placeholder="Email Giriniz">
                            <button type="submit"><span><i class="icofont-ui-email"></i>Abone Ol</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->


        <!--=====================================
                    INTRO PART START
        =======================================-->
        <section class="intro-part">
            <div class="container">
                <div class="row intro-content">
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="intro-content">
                                <h5>Eve Ücretsiz Teslim</h5>
                                <p>75 ₺ Üzeri alışverişlerinizde kapınıza hızlı ve ücretsiz teslim!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="intro-content">
                                <h5>Geri Dönüşebilir Poşetler</h5>
                                <p>Doğayı önemsiyoruz.. Tüm siparişleriniz geri dönüşebilir poşetlerle getirilmektedir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="intro-content">
                                <h5>Hızlı Canlı Destek</h5>
                                <p>Siparişiniz veya herhangi bir konuda anında yanınızdayız!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="intro-content">
                                <h5>Güvenli Ödeme Seçeneği</h5>
                                <p>3D Secure Sistemimiz ile güvenli ödeme yapabilirsiniz!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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