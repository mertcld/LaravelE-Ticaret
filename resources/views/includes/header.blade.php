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
                        <img src="{{Session::Get('picture')}}" alt="user">
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
                        <a href="#" class="header-widget" title="Compare List">
                            <i class="fas fa-random"></i>
                            <sup>0</sup>
                        </a>
                        <a href="#" class="header-widget" title="Wishlist">
                            <i class="fas fa-heart"></i>
                            <sup>0</sup>
                        </a>
                        <button class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i>
                            <sup>2</sup>
                            <span>Toplam Fiyat<small>59.00 ₺</small></span>
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
                                <li class="navbar-item">
                                    <a class="navbar-link " href="/">Ana Sayfa</a>
                                    
                                </li>
                                 @foreach($categories as $categorie)
                                <li class="navbar-item ">
                                    <a class="navbar-link" href="{{route('magaza')}}">{{$categorie['name']}}</a>
                                   
                                </li>
                                  @endforeach
                               
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
                    <span>Toplam Ürün (2)</span>
                </div>
                <button class="cart-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="cart-list">
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="https://i2.milimaj.com/i/milliyet/75/0x0/5fac766a5542841b6073033f.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">Avakado</a></h6>
                            <p>Fiyat - 11 ₺</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="4">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>44 ₺</h6>
                        </div>
                    </div>
                </li> 
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="https://www.guven.com.tr/storage/app/media/portakalsuyu.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="#">Portakal Suyu</a></h6>
                            <p>Fiyat 15 ₺</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>15 ₺</h6>
                        </div>
                    </div>
                </li>
              
             
           
            </ul>
            <div class="cart-footer">
                <button class="coupon-btn">Kupon Kodun Var mı?</button>
                <form class="coupon-form">
                    <input type="text" placeholder="Kupon kodunu giriniz.">
                    <button type="submit"><span>Uygula</span></button>
                </form>
                <a class="cart-checkout-btn" href="{{route('sepet')}}">
                    <span class="checkout-label">Toplam Tutar</span>
                    <span class="checkout-price">59 ₺</span>
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
                    <a href="#" class="btn btn-inline">
                        <i class="fa fa-unlock-alt"></i>
                        <span>Kayıt Ol</span>
                    </a>
                </div>
                <!-- This commentable code show when user login or register -->
                <!-- <div class="nav-profile">
                    <a class="nav-user" href="#"><img src="/images/user.png" alt="user"></a>
                    <h4 class="nav-name"><a href="profile.html">Miron Mahmud</a></h4>
                </div> -->
               
              
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
                    <p>All Rights Reserved by <a href="#">MEGİ</a></p>
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
                <sup>2+</sup>
            </button>
            <a href="#" title="Wishlist">
                <i class="fas fa-heart"></i>
                <span>İstek Listesi</span>
                <sup>0</sup>
            </a>
            <a href="#" title="Compare List">
                <i class="fas fa-random"></i>
                <span>Karşılaştır</span>
                <sup>0</sup>
            </a>
        </menu>