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
<link rel="stylesheet" href="/css/custom/index.css">
@stop

<div>

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
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/02.jpg" alt="product"></li>
                                        <li><img src="/images/product/03.jpg" alt="product"></li>
                                        <li><img src="/images/product/04.jpg" alt="product"></li>
                                        <li><img src="/images/product/05.jpg" alt="product"></li>
                                        <li><img src="/images/product/06.jpg" alt="product"></li>
                                        <li><img src="/images/product/07.jpg" alt="product"></li>
                                    </ul>
                                    <ul class="thumb-slider">
                                        <li><img src="/images/product/01.jpg" alt="product"></li>
                                        <li><img src="/images/product/02.jpg" alt="product"></li>
                                        <li><img src="/images/product/03.jpg" alt="product"></li>
                                        <li><img src="/images/product/04.jpg" alt="product"></li>
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
        <section class="home-index-slider slider-arrow slider-dots">
            <div class="banner-part banner-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-content">
                                <h1>24 SAAT ÜCRETSİZ EVE TESLİMAT !</h1>
                                <small class="mb-5">* 75 TL üzeri alışverişler için.</small>
                                <p>Evinize birbirinden taze meyve sebzeler anında teslimat !</p>
                                
                                <div class="banner-btn">
                                    <a class="btn btn-inline" href="{{url('magaza')}}">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>Alışverişe Başla!</span>
                                    </a>
                               
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-img">
                                <img src="/images/home/index/01.png" alt="index">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-part banner-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-img">
                                <img src="/images/home/index/02.png" alt="index">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-content">
                                <h1>İLK SİPARİŞİNİZE ÖZEL 50 TL İNDİRİM</h1>
                                <p>Sitemize yeni kayıt olan kullancılarımıza 50 TL İndirim + Ücretsiz Teslimat ! </p>
                                <div class="banner-btn">
                                    <a class="btn btn-inline" href="{{url('magaza')}}">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>Alışverişe Başla</span>
                                    </a>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--=====================================
                    BANNER PART END
        =======================================-->
  <div id="kurlar"></div><script async src="https://dovizmix.com/dovizmix/js/dovizwidget.min.js" type="text/javascript" charset="utf-8" ></script>


     


        
        <section class="section recent-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>En Çok Satan Ürünlerimiz</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
             @foreach($products as $product)
             <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">İndirim</label>
                                    <label class="label-text new">Yeni</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/02.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Ürün Karşılaştır" href="#" class="fas fa-random"></a>
                                    <a title="Ürün Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Ürün Detayı" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">{{$product['name']}}</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>{{$product['price']}} ₺</del>
                                    <span>{{$product['price']}} ₺<small>/stok:{{$product['quantity']}} </small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Ekle</span>
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
                    
                    <!-- <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/03.jpg" alt="product">
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
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/04.jpg" alt="product">
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
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/05.jpg" alt="product">
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
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/06.jpg" alt="product">
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
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/07.jpg" alt="product">
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
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/08.jpg" alt="product">
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
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/09.jpg" alt="product">
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
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="/images/product/10.jpg" alt="product">
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
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="{{url('magaza')}}" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>Daha Fazla</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    RECENT PART END
        =======================================-->


        <!--=====================================
                    PROMOTION PART START
        =======================================-->
        <div class="section promo-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="promo-img text-center" >
                            <a href=""><img src="/images/yarifiyatbanner.jpg" alt="promo"  style="width:75%;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                    PROMOTION PART END
        =======================================-->


        <!--=====================================
                    FEATURED PART START
        =======================================-->
        <!-- <section class="section feature-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>our featured items</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="/images/product/09.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="/images/product/10.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="/images/product/11.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="/images/product/12.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="/images/product/13.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="/images/product/14.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="{{url('magaza')}}" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>Daha Fazla</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--=====================================
                    FEATURE PART END
        =======================================-->
      

        <!--=====================================
                    COUNTDOWN PART START
        =======================================-->
        <section class="section countdown-part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mx-auto">
                        <div class="countdown-content">
                            <h3>Sebzeler için özel saat özel indirim!</h3>
                            <p>Tüm sebzelerde geçerli olacak mükemmel indirimler için sabırsızlıkla bekliyoruz..</p>
                            <div class="countdown countdown-clock" data-countdown="2022/05/11">
                                <span class="countdown-time"><span>00</span><small>Gün</small></span>
                                <span class="countdown-time"><span>00</span><small>Saat</small></span>
                                <span class="countdown-time"><span>00</span><small>Dakika</small></span>
                                <span class="countdown-time"><span>00</span><small>Saniye</small></span>
                            </div>
                            <a href="{{url('magaza')}}" class="btn btn-inline">
                                <i class="fas fa-shopping-basket"></i>
                                <span>Alışverişe Başla</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <div class="countdown-img">
                            <img src="/images/countdown.png" alt="countdown">
                            <div class="countdown-off">
                                <span>20%</span>
                                <span>off</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    COUNTDOWN PART END
        =======================================-->


        <!--=====================================
                    NEW ITEM PART START
        =======================================-->
        <section class="section newitem-part">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-heading">
                            <h2>Yeni Gelen Ürünler</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul class="new-slider slider-arrow">
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="/images/product/15.jpg" alt="product">
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
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <del>$34</del>
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="/images/product/16.jpg" alt="product">
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
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <del>$34</del>
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="/images/product/17.jpg" alt="product">
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
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <del>$34</del>
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="/images/product/18.jpg" alt="product">
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
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <del>$34</del>
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="/images/product/19.jpg" alt="product">
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
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <del>$34</del>
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="/images/product/20.jpg" alt="product">
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
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <del>$34</del>
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="section-btn-25">
                            <a href="{{url('magaza')}}" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>Daha Fazla Gör</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!--=====================================
                    NEW ITEM PART END
        =======================================-->


        <!--=====================================
                    PROMOTION PART START
        =======================================-->
        <div class="section promo-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                        <div class="promo-img" style="height:500px;">
                            <a href=""><img src="/images/banner1.jpg" alt="promo" style="height:340px;"></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                        <div class="promo-img" style="height:550px;">
                            <a href=""><img src="/images/banner2.jpg" alt="promo"  style="height:340px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                    PROMOTION PART END
        =======================================-->


        <!--=====================================
                    NICHE PART START
        =======================================-->
        <section class="section niche-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Browse by Top Niche</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#top-order" class="tab-link active" data-bs-toggle="tab">
                                    <i class="icofont-price"></i>
                                    <span>top order</span>
                                </a>
                            </li>
                            <li>
                                <a href="#top-rate" class="tab-link" data-bs-toggle="tab">
                                    <i class="icofont-star"></i>
                                    <span>top rating</span>
                                </a>
                            </li>
                            <li>
                                <a href="#top-disc" class="tab-link" data-bs-toggle="tab">
                                    <i class="icofont-sale-discount"></i>
                                    <span>top discount</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane active" id="top-order">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/01.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/02.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/03.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/04.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/05.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/06.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card product-disable">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/07.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/08.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/09.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/10.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="top-rate">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/11.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/12.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/13.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/14.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/15.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/16.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card product-disable">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/17.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/18.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/19.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/20.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="top-disc">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/06.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/07.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/08.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/09.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/10.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/11.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/12.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/13.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/14.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="/images/product/15.jpg" alt="product">
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
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="{{url('magaza')}}" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>Daha Fazla</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
        <section class="section blog-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2> Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-slider slider-arrow">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="/images/blog/01.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="/images/blog/02.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="/images/blog/03.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="/images/blog/04.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="#" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>Hepsini Gör</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                      BLOG PART END
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