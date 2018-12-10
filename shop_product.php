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
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">shop</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Shop Page Start -->
        <div class="main-shop-page ptb-80">
            <div class="container">
                <!-- Row End -->
                <div class="row productos">

                    <!-- Sidebar Shopping Option Start 
                    <div class="col-lg-3 order-2 order-lg-1 mt-all-30">

                    </div>-->
                    

                    <!-- Product Categorie List Start 
                    <div class="col-lg-9 order-1 order-lg-2">
                    </div>-->

                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>


<?php include('compartida/footer.php') ?>


<!-- index js -->
<script src="js/index/index.js"></script>

<script src="js/shop/shop.js"></script>


</html>