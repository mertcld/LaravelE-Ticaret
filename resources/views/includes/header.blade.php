<div class="backdrop"></div>
        
        <!--=====================================
                    HEADER TOP PART START
        =======================================-->
        <section class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="header-top-welcome">
                            <p>Dalından Organik Sebze-Meyve Diyarına Hoşgeldiniz!</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                       
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <ul class="header-top-list">
                            <li><a href="#">Kariyer</a></li>
                            <li><a href="#">Tedarikçi Ol</a></li>
                            <li><a href="#">İletişime Geç</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    HEADER TOP PART END 
        =======================================-->
        

        <!--=====================================
                    HEADER PART START
        =======================================-->
        <section class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user"><img src="/images/user.png" alt="user"></button>
                        <a href="{{url('/')}}"><img src="/images/logo.png" alt="logo"></a>
                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                    <a href="{{url('/')}}" class="header-logo">
                        <img src="/images/logo.png" alt="logo">
                    </a>
                    @if (Session::Get('user') ==null )
                    
                    <a href="{{url('/girisyap')}}" class="header-widget" title="My Account">
                        <img src="/images/user.png" alt="user">
                        <span>Giriş Yap</span>
                    </a>
                    @else
                    <a href="{{route('hesabim')}}" class="header-widget" title="My Account">
                        <img src="/images/user.png" alt="user">
                        <span>{{Session::Get('userName','Hesabım')}}</span>
                       
                    </a>
                      <a href="{{route('logout')}}"  title="Çıkış Yap" class="header-widget" title="My Account">
                    <span><i class="icofont-logout"></i></span></a>
                    @endif

                    <form class="header-form">
                        <input type="text" placeholder="Arama yap...">
                        <button><i class="fas fa-search"></i></button>
                    </form>

                    <div class="header-widget-group">
                        <a href="compare.html" class="header-widget" title="Compare List">
                            <i class="fas fa-random"></i>
                            <sup>0</sup>
                        </a>
                        <a href="wishlist.html" class="header-widget" title="Wishlist">
                            <i class="fas fa-heart"></i>
                            <sup>0</sup>
                        </a>
                        <button class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i>
                            <sup>9+</sup>
                            <span>Toplam Fiyat<small>345.00 ₺</small></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    HEADER PART END
        =======================================-->


        <!--=====================================
                    NAVBAR PART START
        =======================================-->
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">Ana Sayfa</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="home-grid.html">Home grid</a></li>
                                        <li><a href="index.html">Home index</a></li>
                                        <li><a href="home-classic.html">Home classic</a></li>
                                        <li><a href="home-standard.html">Home standard<span class="menu-badge">new</span></a></li>
                                        <li><a href="home-category.html">Home category</a></li>
                                    </ul>
                                </li>
                                <li class="navbar-item dropdown-megamenu">
                                    <a class="navbar-link dropdown-arrow" href="#">Alışveriş</a>
                                    <div class="megamenu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">shop pages</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="shop-5column.html">shop 5 column</a></li>
                                                            <li><a href="shop-4column.html">shop 4 column<span class="menu-badge">new</span></a></li>
                                                            <li><a href="shop-3column.html">shop 3 column</a></li>
                                                            <li><a href="shop-2column.html">shop 2 column</a></li>
                                                            <li><a href="shop-1column.html">shop 1 column<span class="menu-badge">new</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">product pages</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="product-tab.html">product single tab</a></li>
                                                            <li><a href="product-grid.html">product single grid<span class="menu-badge">new</span></a></li>
                                                            <li><a href="product-video.html">product single video<span class="menu-badge">new</span></a></li>
                                                            <li><a href="product-simple.html">product single simple</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">user action</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                            <li><a href="compare.html">compare</a></li>
                                                            <li><a href="checkout.html">Sepet</a></li>
                                                            <li><a href="orderlist.html">order history</a></li>
                                                            <li><a href="invoice.html">order invoice</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-promo">
                                                        <a href="#"><img src="/images/promo/shop/01.jpg" alt="promo"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="navbar-item dropdown-megamenu">
                                    <a class="navbar-link dropdown-arrow" href="#">Kategori</a>
                                    <div class="megamenu">
                                        <div class="container">
                                            <div class="row row-cols-5">
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <a class="megamenu-title" href="{{url('/meyveler')}}">Meyveler</a>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Elma</a></li>
                                                            <li><a href="#">Armut</a></li>
                                                            <li><a href="#">Kiraz</a></li>
                                                            <li><a href="#">Ananas</a></li>
                                                            <li><a href="#">Kavun</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                <div class="megamenu-wrap">
                                                        <a class="megamenu-title" href="{{url('/sebzeler')}}">Sebzeler</a>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Elma</a></li>
                                                            <li><a href="#">Armut</a></li>
                                                            <li><a href="#">Kiraz</a></li>
                                                            <li><a href="#">Ananas</a></li>
                                                            <li><a href="#">Kavun</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                <div class="megamenu-wrap">
                                                        <a class="megamenu-title" href="{{url('/yesillikler')}}">Yeşillikler</a>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Elma</a></li>
                                                            <li><a href="#">Armut</a></li>
                                                            <li><a href="#">Kiraz</a></li>
                                                            <li><a href="#">Ananas</a></li>
                                                            <li><a href="#">Kavun</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                <div class="megamenu-wrap">
                                                        <a class="megamenu-title" href="{{url('/meyvesuyu')}}">Meyve Suları</a>
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">Elma</a></li>
                                                            <li><a href="#">Armut</a></li>
                                                            <li><a href="#">Kiraz</a></li>
                                                            <li><a href="#">Ananas</a></li>
                                                            <li><a href="#">Kavun</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                               
                                            
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">Sayfalar</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="faq.html">faqs</a></li>
                                        <li><a href="offer.html">offers</a></li>
                                        <li><a href="profile.html">my profile</a></li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                        <li><a href="privacy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">coming soon</a></li>
                                        <li><a href="blank-page.html">blank page</a></li>
                                        <li><a href="error.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">Giriş Çıkış </a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="reset-password.html">reset password</a></li>
                                        <li><a href="change-password.html">change password</a></li>
                                    </ul>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">Blog</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="blog-grid.html">blog grid</a></li>
                                        <li><a href="blog-standard.html">blog standard</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="navbar-info-group">
                                <div class="navbar-info">
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <small>İletişim Hattı</small>
                                        <span>(551) 127 9958</span>
                                    </p>
                                </div>
                                <div class="navbar-info">
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <small>Destek Hattı</small>
                                        <span>destek@megi.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--=====================================
                    NAVBAR PART END
        =======================================-->
        <!-- <div class = "container">
            <div class = "row">
                 <div class = "card">
                    <h1 id = "dollar" >##</h1>
                    <span>dollar</span>
                </div>

                <div class = "card">
                    <h1 id = "euro" >##</h1>
                    <span>euro</span>
                </div>

                <div class = "card">
                    <h1 id = "sterlin" >##</h1>
                    <span>sterlin</span>
                </div>

            </div>
        </div> -->

        <?php

        $kurlar = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

        $dolar = $kurlar -> Currency[0] -> BanknoteBuying;
        $euro = $kurlar -> Currency[3] -> BanknoteSelling;

        $dolar = str_replace(".",",",$dolar);
        $euro = str_replace(".",",",$euro);

        echo "Dolar:" .$dolar;
        echo "<br>";
        echo "Euro:" .$euro;
        ?>


        <!--=====================================
                CATEGORY SIDEBAR PART START
        =======================================-->
        <aside class="category-sidebar">
            <div class="category-header">
                <h4 class="category-title">
                    <i class="fas fa-align-left"></i>
                    <span>categories</span>
                </h4>
                <button class="category-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="category-list">
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-vegetable"></i>
                        <span>vegetables</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">asparagus</a></li>
                        <li><a href="#">broccoli</a></li>
                        <li><a href="#">carrot</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-groceries"></i>
                        <span>groceries</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Grains & Bread</a></li>
                        <li><a href="#">Dairy & Eggs</a></li>
                        <li><a href="#">Oil & Fat</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fruit"></i>
                        <span>fruits</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Orange</a></li>
                        <li><a href="#">Strawberry</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-dairy-products"></i>
                        <span>dairy farm</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Egg</a></li>
                        <li><a href="#">milk</a></li>
                        <li><a href="#">butter</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-crab"></i>
                        <span>sea foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Lobster</a></li>
                        <li><a href="#">Octopus</a></li>
                        <li><a href="#">Shrimp</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-salad"></i>
                        <span>diet foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Salmon</a></li>
                        <li><a href="#">Potatoes</a></li>
                        <li><a href="#">Greens</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-dried-fruit"></i>
                        <span>dry foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">noodles</a></li>
                        <li><a href="#">Powdered milk</a></li>
                        <li><a href="#">nut & yeast</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fast-food"></i>
                        <span>fast foods</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">mango</a></li>
                        <li><a href="#">plumsor</a></li>
                        <li><a href="#">raisins</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-cheers"></i>
                        <span>drinks</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Wine</a></li>
                        <li><a href="#">Juice</a></li>
                        <li><a href="#">Water</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-beverage"></i>
                        <span>coffee</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Cappuchino</a></li>
                        <li><a href="#">Espresso</a></li>
                        <li><a href="#">Latte</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-barbecue"></i>
                        <span>meats</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Meatball</a></li>
                        <li><a href="#">Sausage</a></li>
                        <li><a href="#">Poultry</a></li>
                    </ul>
                </li>
                <li class="category-item">
                    <a class="category-link dropdown-link" href="#">
                        <i class="flaticon-fish"></i>
                        <span>fishes</span>
                    </a>
                    <ul class="dropdown-list">
                        <li><a href="#">Agujjim</a></li>
                        <li><a href="#">saltfish</a></li>
                        <li><a href="#">pazza</a></li>
                    </ul>
                </li>
            </ul>
            <div class="category-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </aside>
        <!--=====================================
                CATEGORY SIDEBAR PART END
        =======================================-->

        <!--=====================================
                  CART SIDEBAR PART START
        =======================================-->
        <aside class="cart-sidebar">
            <div class="cart-header">
                <div class="cart-total">
                    <i class="fas fa-shopping-basket"></i>
                    <span>total item (5)</span>
                </div>
                <button class="cart-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="cart-list">
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/images/product/01.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li> 
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/images/product/02.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/images/product/03.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/images/product/04.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="/images/product/05.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="cart-footer">
                <button class="coupon-btn">Do you have a coupon code?</button>
                <form class="coupon-form">
                    <input type="text" placeholder="Enter your coupon code">
                    <button type="submit"><span>apply</span></button>
                </form>
                <a class="cart-checkout-btn" href="checkout.html">
                    <span class="checkout-label">Proceed to Checkout</span>
                    <span class="checkout-price">$369.78</span>
                </a>
            </div>
        </aside>
        <!--=====================================
                    CART SIDEBAR PART END
        =======================================-->


        <!--=====================================
                  NAV SIDEBAR PART START
        =======================================-->
        <aside class="nav-sidebar">
            <div class="nav-header">
                <a href="{{url('/')}}"><img src="/images/logo.png" alt="logo"></a>
                <button class="nav-close"><i class="icofont-close"></i></button>
            </div>
            <div class="nav-content">
                <div class="nav-btn">
                    <a href="login.html" class="btn btn-inline">
                        <i class="fa fa-unlock-alt"></i>
                        <span>join here</span>
                    </a>
                </div>
                <!-- This commentable code show when user login or register -->
                <!-- <div class="nav-profile">
                    <a class="nav-user" href="#"><img src="/images/user.png" alt="user"></a>
                    <h4 class="nav-name"><a href="profile.html">Miron Mahmud</a></h4>
                </div> -->
               
                <ul class="nav-list">
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                        <ul class="dropdown-list">
                            <li><a href="home-grid.html">Home grid</a></li>
                            <li><a href="{{url('/')}}">Home index</a></li>
                            <li><a href="home-classic.html">Home classic</a></li>
                            <li><a href="home-standard.html">Home standard<span class="menu-badge">new</span></a></li>
                            <li><a href="home-category.html">Home category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                        <ul class="dropdown-list">
                            <li><a href="shop-5column.html">shop 5 column</a></li>
                            <li><a href="shop-4column.html">shop 4 column<span class="menu-badge">new</span></a></li>
                            <li><a href="shop-3column.html">shop 3 column</a></li>
                            <li><a href="shop-2column.html">shop 2 column</a></li>
                            <li><a href="shop-1column.html">shop 1 column<span class="menu-badge">new</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                        <ul class="dropdown-list">
                            <li><a href="product-tab.html">product tab</a></li>
                            <li><a href="product-grid.html">product grid<span class="menu-badge">new</span></a></li>
                            <li><a href="product-video.html">product video<span class="menu-badge">new</span></a></li>
                            <li><a href="product-simple.html">product simple</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                        <ul class="dropdown-list">
                            <li><a href="profile.html">profile</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="compare.html">compare</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="orderlist.html">order history</a></li>
                            <li><a href="invoice.html">order invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                        <ul class="dropdown-list">
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li><a href="reset-password.html">reset password</a></li>
                            <li><a href="change-password.html">change password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                        <ul class="dropdown-list">
                            <li><a href="blog-grid.html">blog grid</a></li>
                            <li><a href="blog-standard.html">blog standard</a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
                    <li><a class="nav-link" href="profile.html"><i class="icofont-user-alt-3"></i>profile</a></li>
                    <li><a class="nav-link" href="wishlist.html"><i class="icofont-heart"></i>wishlist</a></li>
                    <li><a class="nav-link" href="checkout.html"><i class="icofont-checked"></i>checkout</a></li>
                    <li><a class="nav-link" href="orderlist.html"><i class="icofont-settings"></i>order history</a></li>
                    <li><a class="nav-link" href="faq.html"><i class="icofont-question-circle"></i>need help</a></li>
                    <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
                    <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
                </ul>
                <div class="nav-info-group">
                    <div class="nav-info">
                        <i class="icofont-ui-touch-phone"></i>
                        <p>
                            <small>İletişim Hattı</small>
                            <span>(551) 127 9958</span>
                        </p>
                    </div>
                    <div class="nav-info">
                        <i class="icofont-ui-email"></i>
                        <p>
                            <small>İletişim Hattı</small>
                            <span>destek@megi.com</span>
                        </p>
                    </div>
                </div>
                <div class="nav-footer">
                    <p>All Rights Reserved by <a href="#">mertcloud</a></p>
                </div>
            </div>
        </aside>
        <!--=====================================
                  NAV SIDEBAR PART END
        =======================================-->


        <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
        <menu class="mobile-menu">
            <a href="index.html" title="Home Page">
                <i class="fas fa-home"></i>
                <span>Ana Sayfa</span>
            </a>
            <button class="cate-btn" title="Category List">
                <i class="fas fa-list"></i>
                <span>Kategoriler</span>
            </button>
            <button class="cart-btn" title="Cartlist">
                <i class="fas fa-shopping-basket"></i>
                <span>Sepet</span>
                <sup>9+</sup>
            </button>
            <a href="wishlist.html" title="Wishlist">
                <i class="fas fa-heart"></i>
                <span>İstek Listesi</span>
                <sup>0</sup>
            </a>
            <a href="compare.html" title="Compare List">
                <i class="fas fa-random"></i>
                <span>Karşılaştır</span>
                <sup>0</sup>
            </a>
        </menu>