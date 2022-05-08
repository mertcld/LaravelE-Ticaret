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
        <link rel="stylesheet" href="/css/custom/invoice.css">
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
                    <li class="breadcrumb-item"><a href="#">Sepetim</a></li>
                     
                    <li class="breadcrumb-item active" aria-current="page">Fatura</li>
                </ol>
            </div>
        </section>
       

        <section class="inner-section invoice-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert-info">
                            <p>Teşekkürler. En kısa zamanda eline ulaşacak!</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Sipariş Özeti</h4>
                            </div>
                            <div class="account-content">
                                <div class="invoice-recieved">
                                    <h6>Sipariş Numarası <span>1665</span></h6>
                                    <h6>Sipariş Tarihi <span>23:21 10-04-2022</span></h6>
                                    <h6>Toplam tutar <span>59 ₺</span></h6>
                                    <h6>Ödeme Tipi <span>Kapıda Ödeme</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Sipariş Detayları</h4>
                            </div>
                            <div class="account-content">
                                <ul class="invoice-details">
                                    <li>
                                        <h6>Toplam Ürün</h6>
                                        <p>2 Ürün</p>
                                    </li>
                                    <li>
                                        <h6>Sipariş Tarihi</h6>
                                        <p>23:21 10-04-2022</p>
                                    </li>
                                    <li>
                                        <h6>Teslim Tarihi</h6>
                                        <p>Ertesi Gün Teslimat</p>
                                    </li>
                                    <li>
                                        <h6>Teslim Edilecek Adres</h6>
                                        <p>Cumhuriyet Mahallesi Kartal/İstanbul</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Detaylar</h4>
                            </div>
                            <div class="account-content">
                                <ul class="invoice-details">
                                    <li>
                                        <h6>Ara Toplam</h6>
                                        <p>59 ₺</p>
                                    </li>
                                    <li>
                                        <h6>İndirim</h6>
                                        <p> 0 ₺</p>
                                    </li>
                                    <li>
                                        <h6>Ödeme Tipi</h6>
                                        <p>Kapıda Ödeme</p>
                                    </li>
                                    <li>
                                        <h6>Toplam</h6>
                                        <p>59 ₺</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-scroll">
                            <table class="table-list">
                                <thead>
                                    <tr>
                                        <th scope="col">Ürün Id</th>
                                        <th scope="col">Ürün</th>
                                        <th scope="col">Ürün adı</th>
                                        <th scope="col">Fiyat</th>
                                      
                                        <th scope="col">Miktar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-serial"><h6>01</h6></td>
                                        <td class="table-image"><img src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="product"></td>
                                        <td class="table-name"><h6>Avakado</h6></td>
                                        <td class="table-price"><h6>44 ₺ </h6></td>
                                       
                                        <td class="table-quantity"><h6>4</h6></td>
                                    </tr>
                                    <tr>
                                        <td class="table-serial"><h6>02</h6></td>
                                        <td class="table-image"><img src="	https://www.guven.com.tr/storage/app/media/portakalsuyu.jpg" alt="product"></td>
                                        <td class="table-name"><h6>Portakal Suyu</h6></td>
                                        <td class="table-price"><h6>15 ₺ </h6></td>
                                       
                                        <td class="table-quantity"><h6>1</h6></td>
                                    </tr>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt-5">
                        <a class="btn btn-inline" href="#">
                            <i class="icofont-download"></i>
                            <span>Faturayı İndir</span>
                        </a>
                        <div class="back-home">
                            <a href="/">Anasayfaya Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>





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