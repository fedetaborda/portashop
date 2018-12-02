<?php 
include_once("servicios/index/get_index.php"); 


 if ( $respuesta == '') {  $array = []; }else{ $array = json_decode($respuesta); $arrlength = count($array); }
    
?>

<!-- <?php //include_once('compartida/header.php') ?> -->

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Porta Shop || Ecommerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
     <!-- Fontawesome css -->
     <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Nice select css -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }
    </style>


    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        <!-- Newsletter Popup Start -->
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-40">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the ponno mailing list to receive updates on new arrivals, special offers and other discount information.
                    </p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
        <!-- Header Area Start Here -->
        <header class="header-area">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center text-center text-md-left">
                        <!-- Logo Start -->
                        <div class="col-md-3 col order-1 order-md-1 mb-sm-30">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo/logo.png" alt="logo-img"></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Search Box Start Here -->
                        <div class="col-md-6  order-3 order-md-2">
                            <div class=" categorie-search-box">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Busque de productos..">
                                    <button>
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- Search Box End Here -->
                        <!-- Cart Box Start Here -->
                        <div class="col-md-3 col order-2 order-md-3 mb-sm-30">
                            <div class="cart-box float-md-right">
                                <div class="drodown-show">
                                    <a href="#" id="card">
                                        <span class="total-pro"> 
                                            2 item <br><span>$160.00</span></span>
                                    </a>
                                    <ul class="dropdown cart-box-width">

                                        <!-- <p class="text-info">No existen productos</p> -->


                                        <li>

                                            <div id="list_cart"></div>

                                            <div id="footer"></div>

                                           <!-- <div class="cart-footer">
                                                <ul class="price-content">
                                                    <li>Subtotal
                                                        <span>$57.95</span>
                                                    </li>
                                                    <li>Shipping
                                                        <span>$7.00</span>
                                                    </li>
                                                    <li>Taxes
                                                        <span>$0.00</span>
                                                    </li>
                                                    <li>Total
                                                        <span>$64.95</span>
                                                    </li>
                                                </ul>
                                                <div class="cart-actions text-center">
                                                    <a class="cart-checkout" href="checkout.html">Checkout</a>
                                                </div>
                                            </div> -->
                                              
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                </div>
            </div>
            <div class="header-bottom blue-bg header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Menu Area Start Here -->
                        <div class="col-lg-10 d-none d-lg-block">
                            <nav>
                                <ul class="header-menu-list">
                                    <li class="active">
                                        <a class="drop-icon" href="index.html">home</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="index.html">Home Style 1</a>
                                            </li>
                                            <li>
                                                <a href="home-2.html">Home Style 2</a>
                                            </li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li>
                                        <a class="drop-icon" href="shop.html">Mobile</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">electronicsShop</li>
                                                    <li>
                                                        <a href="shop.html">Integrated Systems</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">DJI</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Power Vision</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Ryze Tech</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Yuneec</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Stroller Shop</li>
                                                    <li>
                                                        <a href="shop.html">Joggers</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Lightweight</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Prams</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Standard</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Travel Systems</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">smartwatch Shop</li>
                                                    <li>
                                                        <a href="shop.html">Men's Watches</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Ladies Watches</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Sport Watch</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Wrist Watches</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Watch Bands</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li>
                                        <a class="drop-icon" href="#">pages</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="contact.html">contact us</a>
                                            </li>
                                            <li>
                                                <a href="about.html">about us</a>
                                            </li>
                                            <li>
                                                <a href="register.html">register</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                            <li>
                                                <a href="forgot-password.html">forgot password</a>
                                            </li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li>
                                        <a class="drop-icon" href="blog.html">blog</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown blog-dropdown">
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li>
                                        <a class="drop-icon" href="shop.html">shop</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="shop.html">Shop</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html">product details</a>
                                            </li>
                                            <li>
                                                <a href="compare.html">compare</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">cart</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">checkout</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">wishlist</a>
                                            </li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Menu Area End Here -->
                        <!-- Cart Box Start Here -->
                        <div class="col-lg-2">
                            <div class="setting-box float-right">
                                <ul>
                                    <li class="drodown-show"><a href="#"><span class="ti-settings"></span></a>
                                        <!-- Currency & Language Selection Start -->
                                        <ul class="dropdown cart-box-width currency-selector">
                                            <li>
                                                <h3>My Account </h3>
                                                <ul>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="account.html">My Account</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Currency: USD</h3>
                                                <ul>
                                                    <li><a href="#">€ Euro</a></li>
                                                    <li><a href="#">£ Pound Sterling</a></li>
                                                    <li><a href="#">$ US Dollar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Language: EN-GB</h3>
                                                <ul>
                                                    <li>
                                                        <a href="#"><img src="img/header/1.jpg" alt="lang-icon"> English</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/header/2.jpg" alt="lang-icon"> Germany</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- Currency & Language Selection End -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                    <!-- Mobile Menu Start Here -->
                    <div class="mobile-menu d-block d-lg-none" data-menu="Menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.html">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                                        <li>
                                            <a href="index.html">Home Style 1</a>
                                        </li>
                                        <li>
                                            <a href="home-2.html">Home Style 2</a>
                                        </li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li>
                                    <a href="#">Mobile</a>
                                    <!-- Men Accessories Dropdown Start -->
                                    <ul class="submobile-mega-dropdown">
                                        <li>
                                            <a href="#">Electra Shope</a>
                                            <!-- Watches Dropdown Start -->
                                            <ul>
                                                <li>
                                                    <a href="shop.html">Integrated Systems</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">DJI</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Power Vision</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Ryze Tech</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Yuneec</a>
                                                </li>
                                            </ul>
                                            <!-- Watches Dropdown End -->
                                        </li>
                                        <li>
                                            <a href="#">Stroller Shop</a>
                                            <!-- Shoes Dropdown Start -->
                                            <ul>
                                                <li>
                                                    <a href="shop.html">Joggers</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Lightweight</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Prams</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Standard</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Travel Systems</a>
                                                </li>
                                            </ul>
                                            <!-- Shoes Dropdown End -->
                                        </li>
                                        <li>
                                            <a href="#">smartwatch Shop</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li>
                                                    <a href="shop.html">Men's Watches</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Ladies Watches</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Sport Watch</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Wrist Watches</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Watch Bands</a>
                                                </li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                        <li>
                                            <a href="#">Scooter Shop</a>
                                            <!-- Bags Dropdown Start -->
                                            <ul>
                                                <li>
                                                    <a href="shop.html">Pro Scooters</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Custom Scooters</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Kids Scooters</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Dirt Scooters</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Adult / Commuter Scooters</a>
                                                </li>
                                            </ul>
                                            <!-- Bags Dropdown End -->
                                        </li>
                                    </ul>
                                    <!-- Men Accessories Dropdown End -->
                                </li>
                                <li>
                                    <a href="#">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html">product details</a>
                                        </li>
                                        <li>
                                            <a href="compare.html">compare</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">cart</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">checkout</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">wishlist</a>
                                        </li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li>
                                            <a href="blog.html">blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li>
                                    <a href="#">pages</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li>
                                            <a href="about.html">about us</a>
                                        </li>
                                        <li>
                                            <a href="account.html">My account</a>
                                        </li>
                                        <li>
                                            <a href="register.html">register</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                        <li>
                                            <a href="forgot-password.html">forgot password</a>
                                        </li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Mobile Menu End Here -->
                </div>
                <!-- Container End -->
            </div>
        </header>
        <!-- Header Area End Here -->


        <!-- Slider Area Start -->
        <div class="slider-area">
            <!-- Slider Area Start Here -->
            <div class="slider-activation owl-carousel">
                <!-- Start Single Slide -->
                <div class="slide align-center-left fullscreen animation-style-01 bg-image-1 ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="sldier-right-img">
                                    <img src="img/slider/s1_1.png" alt="slider-img">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="slider-content">
                                    <h6>Best Products</h6>
                                    <h1>Mount Carved 2200XD</h1>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                    <div class="slide-btn small-btn">
                                        <a href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide align-center-left fullscreen animation-style-02 bg-image-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="sldier-right-img">
                                    <img src="img/slider/s1_2.png" alt="slider-img">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="slider-content">
                                    <h6>Best deal of the year</h6>
                                    <h1>Mount Carved 2200XD</h1>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                    <div class="slide-btn small-btn">
                                        <a href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
            <!-- Slider Area End Here -->
        </div>
        <!-- Slider Area End -->

        <!-- Featured Product Start Here -->
        <div class="featured-pro pb-80 mt-80">
            <div class="container">
                <div class="main-product-tab-area">
                    <!-- Nav tabs -->
                    <ul class="nav tabs-area pro-tabs-area" role="tablist">
                        <li class="nav-item">
                            <a class="active" data-toggle="tab" href="#best-deal">Destacados</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" href="#new-pro">Nuevos</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" href="#featured">Promociones</a>
                        </li>
                    </ul>
                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="best-deal" class="tab-pane fade show active">
                            <!-- Best Deal Product Activation Start Here -->
                            <div class="feature-pro-active owl-carousel">

                         <?php   if (!$array) { ?>

                                <div class="loader"></div>

                         <?php   } ?>
                                
                            <?php foreach($array as $producto): ?>

                                <div class="single-ponno-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="productos.php?codigo_prod=<?php echo $producto->codigo_prod ?>">
                                            <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/products/p2.jpg" alt="single-product">
                                        </a>
                                        <div class="pro-actions-link">
                                            <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                            <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                        </div>
                                        <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                        <span class="sticker-sale">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">

                                            <h4>
                                            <a href="productos.php?codigo_prod=<?php echo $producto->codigo_prod ?>">

                                                 <?php echo $producto->descripcion?>
                                            </a>
                                            </h4>
                                            <p id="click">
                                            <span class="special-price">
                                                <?php echo '$' . $producto->precio ?>
                                            </span>
                                            </p>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="quantity-pro">(200+)</span>
                                            </div>
                                        </div>
                                        <div class="pro-add-cart">
                                            
                                            <button type="button" valor-id="<?php echo $producto->codigo_prod ?>">Agregar
                                            </button>

                                        </div>
                                    </div>

                                </div>

                              
                              <?php  endforeach ?>

                                
                               
                               
                            </div>
                            <!-- Best Deal Product Activation End Here -->
                        </div>
                        <!-- #best-deal End Here -->
                        <div id="new-pro" class="tab-pane fade">
                            <!-- New Product Activation Start Here -->
                            <div class="feature-pro-active owl-carousel">

                                <div class="single-ponno-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/products/p2.jpg" alt="single-product">
                                        </a>
                                        <div class="pro-actions-link">
                                            <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                            <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                        </div>
                                        <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                        <span class="sticker-sale">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product-details.html">Ponno 3</a></h4>
                                            <p><span class="special-price">$140.00</span></p>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="quantity-pro">(200+)</span>
                                            </div>
                                        </div>
                                        <div class="pro-add-cart">
                                            <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>

                                
                            </div>
                            <!-- New Product Activation End Here -->
                        </div>
                        <!-- #new-pro End Here -->
                        <div id="featured" class="tab-pane fade">
                            <!-- Featured Product Activation Start Here -->
                            <div class="feature-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-ponno-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/products/p2.jpg" alt="single-product">
                                        </a>
                                        <div class="pro-actions-link">
                                            <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                            <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                        </div>
                                        <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                        <span class="sticker-sale">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product-details.html">Ponno 360 Camera</a></h4>
                                            <p><span class="special-price">$140.00</span></p>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="quantity-pro">(200+)</span>
                                            </div>
                                        </div>
                                        <div class="pro-add-cart">
                                            <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-ponno-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/products/p2.jpg" alt="single-product">
                                        </a>
                                        <div class="pro-actions-link">
                                            <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                            <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                        </div>
                                        <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                        <span class="sticker-sale">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product-details.html">Ponno 360 Camera</a></h4>
                                            <p><span class="special-price">$140.00</span></p>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="quantity-pro">(200+)</span>
                                            </div>
                                        </div>
                                        <div class="pro-add-cart">
                                            <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-ponno-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/products/p2.jpg" alt="single-product">
                                        </a>
                                        <div class="pro-actions-link">
                                            <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                            <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                        </div>
                                        <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                        <span class="sticker-sale">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product-details.html">Ponno 360 Camera</a></h4>
                                            <p><span class="special-price">$140.00</span></p>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="quantity-pro">(200+)</span>
                                            </div>
                                        </div>
                                        <div class="pro-add-cart">
                                            <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-ponno-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/products/p2.jpg" alt="single-product">
                                        </a>
                                        <div class="pro-actions-link">
                                            <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                            <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                        </div>
                                        <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                        <span class="sticker-sale">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product-details.html">Ponno 360 Camera</a></h4>
                                            <p><span class="special-price">$140.00</span></p>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="quantity-pro">(200+)</span>
                                            </div>
                                        </div>
                                        <div class="pro-add-cart">
                                            <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-ponno-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img/products/p2.jpg" alt="single-product">
                                        </a>
                                        <div class="pro-actions-link">
                                            <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                            <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                        </div>
                                        <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                        <span class="sticker-sale">new</span>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product-details.html">Ponno 360 Camera</a></h4>
                                            <p><span class="special-price">$140.00</span></p>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="quantity-pro">(200+)</span>
                                            </div>
                                        </div>
                                        <div class="pro-add-cart">
                                            <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Featured Product Activation End Here -->
                        </div>
                        <!-- #featured End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
        </div>
        <!-- Featured Product End Here -->
        <!-- Dual Banner Start Here -->
        <div class="dual-banner pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-sm-30">
                        <!-- Single Bannner Start Here -->
                        <div class="single-banner zoom">
                            <a href="shop.html"><img src="img/banner/b2.jpg" alt="banner-img"></a>
                        </div>
                        <!-- Single Bannner End Here -->
                    </div>
                    <div class="col-md-6">
                        <!-- Single Bannner Start Here -->
                        <div class="single-banner zoom">
                            <a href="shop.html"><img src="img/banner/b3.jpg" alt="banner-img"></a>
                        </div>
                        <!-- Single Bannner End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Dual Banner End Here -->
        <!-- Laptop & Computer Products Start Here -->
        <div class="lapto-computers pb-80">
            <div class="container">
                <div class="electronics-list-area d-flex flex-wrap align-items-center justify-content-between mb-40">
                    <h5 class="e-header mb-sm-15">Laptops & Computers</h5>
                    <div class="e-tabs-list">
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area categorie-tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="active" data-toggle="tab" href="#computer">computer</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#laptop">laptop</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#camera">camera</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#speaker">speaker</a>
                            </li>
                        </ul>
                        <!-- Tab Contetn Start -->
                    </div>
                </div>
                <!-- Categorie Tab Contetn Start Here -->
                <div class="tab-content pro-style-changer">
                    <!-- Computer Product Start Here -->
                    <div id="computer" class="tab-pane fade show active">
                    
                   <?php if ( !$array ) { ?>

                        <div class="loader"></div>
                    <?php } ?>

                    <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-lg-40">
                                
                                <div class="tripple-pro">
                                    
                                        <?php for ($i=0 ; $i<3 ; $i++) { ?>

                                        <div class="single-ponno-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="productos.php?codigo_prod=<?php echo $array[$i]->codigo_prod; ?>">
                                                    <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="productos.php?codigo_prod=<?php echo $array[$i]->codigo_prod; ?>">
                                                        <?php echo $array[$i]->descripcion; ?></a>
                                                    </h4>
                                                    <p><span class="special-price">$140.00</span></p>
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="quantity-pro">(200+)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>

                                        <?php  } ?>

                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-lg-40">
                                
                            <div class="tripple-pro">
                                    
                                    <?php for ($i=3 ; $i<6 ; $i++) {  ?>

                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="productos.php?codigo_prod=<?php echo $array[$i]->codigo_prod; ?>">
                                                <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="productos.php?codigo_prod=<?php echo $array[$i]->codigo_prod; ?>">
                                                <?php echo $array[$i]->descripcion; ?>
                                                </a></h4>
                                                <p><span class="special-price">$140.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="quantity-pro">(200+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>

                                    <?php } ?>

                            </div>
                                
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                
                            <div class="tripple-pro">
                                    
                                <?php for ($i=6 ; $i<9 ; $i++) {  ?>

                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="productos.php?codigo_prod=<?php echo $array[$i]->codigo_prod; ?>">
                                                <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="productos.php?codigo_prod=<?php echo $array[$i]->codigo_prod; ?>"><?php echo $array[$i]->descripcion; ?></a></h4>
                                                <p><span class="special-price">$140.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="quantity-pro">(200+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>

                                    <?php } ?>

                            </div>

                            </div>

                        </div>
                    </div>
                    <!-- Computer Product End Here -->
                    <!-- Laptop Product Start Here -->
                    <div id="laptop" class="tab-pane fade">
                    <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-lg-40">
                                
                            <div class="tripple-pro">
                                    
                                    <?php for ($i=7 ; $i<10 ; $i++) {  ?>
    
                                        <div class="single-ponno-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product-details.html">
                                                    <?php echo $array[$i]->descripcion; ?></a></h4>
                                                    <p><span class="special-price">$140.00</span></p>
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="quantity-pro">(200+)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
    
                                        <?php } ?>
    
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-lg-40">
                                <!-- Tripple Product Start Here-->
                                <div class="tripple-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p4.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">Ponno Dia remote</a></h4>
                                                <p><span class="special-price">$32.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span class="quantity-pro">(350+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p5.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">Razra solo Pro</a></h4>
                                                <p><span class="special-price">$30.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="quantity-pro">(100+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p6.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">Diari keyboard</a></h4>
                                                <p><span class="special-price">$140.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-sta-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span class="quantity-pro">(50+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Tripple Product Start Here-->
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <!-- Tripple Product Start Here-->
                                <div class="tripple-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p7.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">jenon Real Box</a></h4>
                                                <p><span class="special-price">$140.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span class="quantity-pro">(200+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p8.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">Oliven Ip Cam</a></h4>
                                                <p><span class="special-price">$140.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="quantity-pro">(10+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p9.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">Ponno Real Box</a></h4>
                                                <p><span class="special-price">$140.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="quantity-pro">(200+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Tripple Product Start Here-->
                            </div>
                        </div>
                    </div>
                    <!-- Laptop Product End Here -->
                    <!-- Camera Product Start Here -->
                    <div id="camera" class="tab-pane fade">
                        <div class="row">
                            <p>nada</p>
                        </div>
                    </div>
                    <!-- Camera Product End Here -->
                    <!-- Speaker Product Start Here -->
                    <div id="speaker" class="tab-pane fade">
                        <div class="row">
                            <p>nada</p>
                            
                        </div>
                    </div>
                    <!-- Speaker Product End Here -->
                    <!-- Others Product Start Here -->

                </div>
                <!-- Categorie Tab Contetn End Here -->
            </div>
        </div>
        <!-- Laptop & Computer Products End Here -->
        <!-- Large Banner Start Here -->
        <div class="large-banner pb-80">
            <div class="container">
                <div class="single-banner zoom">
                    <a href="shop.html"><img src="img/banner/b4.jpg" alt="pro-banner"></a>
                </div>
            </div>
        </div>
        <!-- Large Banner End Here -->
        <!-- Banner & OnSale Area Start Here -->
        <div class="banner-onslae pb-80">
            <div class="container">
                <div class="row">
                    <!-- Onsale Banner Start Here -->
                    <div class="col-xl-8 mb-lg-40">
                        <div class="onsale-banner">
                            <div class="single-banner img-big zoom">
                                <a href="shop.html"><img src="img/banner/b5.jpg" alt="banner-img"></a>
                            </div>
                            <div class="single-banner img-small zoom">
                                <a href="shop.html"><img src="img/banner/b6.jpg" alt="banner-img"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Onsale Banner End Here -->
                    <!-- Onsale Product  Start Here -->
                    <div class="col-xl-4">
                        <div class="pro-style-changer">
                            <h5 class="e-header mb-35">On Sale</h5>
                            <div class="onsale-active owl-carousel">
                                <!-- Dual Pro Start Here -->
                                <div class="dual-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p1.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">Razra solo Pro</a></h4>
                                                <p><span class="special-price">$140.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="quantity-pro">(200+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product" id="productos">
                                        
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p3.jpg" alt="single-product">
                                            </a>
                                        </div>


                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">Finibus Bonorum</a></h4>
                                                <p><span class="special-price">$10.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span class="quantity-pro">(20+)</span>
                                                </div>
                                            </div>
                                        </div> 

                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Dual Pro End Here -->
                                <!-- Dual Pro Start Here -->
                                <div class="dual-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p4.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">Orango mousepad</a></h4>
                                                <p><span class="special-price">$38.99</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="quantity-pro">(40+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p5.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">camcoder Pro</a></h4>
                                                <p><span class="special-price">$60.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="quantity-pro">(40+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Dual Pro End Here -->
                                <!-- Dual Pro Start Here -->
                                <div class="dual-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p7.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">aliquam interdum</a></h4>
                                                <p><span class="special-price">$10.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span class="quantity-pro">(70+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-details.html">
                                                <img class="primary-img" src="img/products/p8.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product-details.html">bibendum porta</a></h4>
                                                <p><span class="special-price">$140.00</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span class="quantity-pro">(40+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Dual Pro End Here -->
                            </div>
                        </div>
                    </div>
                    <!-- Onsale Product End Here -->
                </div>
            </div>
        </div>
        <!-- Banner & OnSale Area End Here -->



<?php include('compartida/footer.php') ?>

   <!-- index js -->
<script src="js/index/index.js"></script>

</html>

        
 