@extends('layouts.default')
@section('css')
<title>Mağaza - MeGi</title>

<!--=====================================
            CSS LINK PART START
=======================================-->
<!-- FAVICON -->
<link rel="icon" href="/images/favicon.png">

<!-- FONTS -->
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
@stop


@section('content')
<!--=====================================
                    PRODUCT VIEW START
        =======================================-->
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
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                    </ul>
                                    <ul class="thumb-slider">
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
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
                                        <del>₺38.00</del>
                                        <span>₺24.00<small>/per kilo</small></span>
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
                <h2>MeGi Taze Mağaza</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ürünler</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    SHOP PART START
        =======================================-->
        <section class="inner-section shop-part">
            <div class="container">
                <div class="row content-reverse">
                    <div class="col-lg-3">
                        <div class="shop-widget-promo">
                            <a href="#"><img src="/images/sebzevemeyve.png" alt="promo"></a>
                        </div>
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Fiyata Göre Filtre</h6>
                            <form>
                                <div class="shop-widget-group">
                                    <input type="text" placeholder="Min - 0">
                                    <input type="text" placeholder="Max - 1000">
                                </div>
                                <button class="shop-widget-btn">
                                    <i class="fas fa-search"></i>
                                    <span>Ara</span>
                                </button>
                            </form>
                        </div>
                       
                     
                        <div class="shop-widget">
                            <h6 class="shop-widget-title">Kategoriye Göre Filtre</h6>
                            <form>
                                <input class="shop-widget-search" type="text" placeholder="Ara...">
                                <ul class="shop-widget-list shop-widget-scroll">
                                @foreach($categories as $categorie)
                                    <li>
                                        <div class="shop-widget-content">
                                            <input type="checkbox" id="cate1">
                                            <label for="cate1">{{$categorie['name']}}</label>
                                        </div>
                                        <span class="shop-widget-number">(10)</span>
                                    </li>
                                    @endforeach
                                  
                                </ul>
                                <button class="shop-widget-btn">
                                    <i class="far fa-trash-alt"></i>
                                    <span>Temizle</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top-filter">
                                    <div class="filter-show">
                                        <label class="filter-label">Göster :</label>
                                        <select class="form-select filter-select">
                                            <option value="1">12</option>
                                            <option value="2">24</option>
                                            <option value="3">36</option>
                                        </select>
                                    </div>
                                 
                                    <div class="filter-action">
                                        <a href="#" title="3 Sütun"><i class="fas fa-th"></i></a>
                                        <a href="#" title="2 Sütun"><i class="fas fa-th-large"></i></a>
                                        <a href="#" title="1 Sütun"><i class="fas fa-th-list"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4">
                        @foreach($products as $product)
                            <div class="col">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">Yeni</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="{{$product['picture']}}" alt="product">
                                        </a>
                                        <div class="product-widget">
                                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <a href="product-video.html">{{$product['quantity']}}</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">{{$product['name']}} </a>
                                        </h6>
                                        <h6 class="product-price">
                                             
                                            <span>{{$product['price']}}₺<small></small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Sepete Ekle</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
</div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bottom-paginate">
                                    <p class="page-info">{{$categoriesCount}} Kayıt gösteriliyor</p>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fas fa-long-arrow-alt-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                     
                                      
                                      
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    SHOP PART END
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
        <!--=====================================
                    INTRO PART END
        =======================================-->




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