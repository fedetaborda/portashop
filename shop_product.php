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
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3 order-2 order-lg-1 mt-all-30">
                        <div class="sidebar shop-sidebar">
                            <!-- Price Filter Options Start -->
                            <div class="search-filter mb-30">
                                <h3 class="sidebar-title">filter by price</h3>
                                <form action="#" class="slider-sidebar">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount-range" readonly>
                                </form>
                            </div>
                            <!-- Price Filter Options End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">categories</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="camera" type="checkbox">
                                        <label class="form-check-label" for="camera">Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                        <label class="form-check-label" for="GamePad">GamePad (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                        <label class="form-check-label" for="Digital">Digital Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                        <label class="form-check-label" for="Virtual"> Virtual Reality (8) </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Product Size Start -->
                            <div class="size mb-30">
                                <h3 class="sidebar-title">size</h3>
                                <ul class="size-list sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="small" type="checkbox">
                                        <label class="form-check-label" for="small">S (6)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="medium" type="checkbox">
                                        <label class="form-check-label" for="medium">M (9)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="large" type="checkbox">
                                        <label class="form-check-label" for="large">L (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Size End -->
                            <!-- Product Color Start -->
                            <div class="color mb-30">
                                <h3 class="sidebar-title">color</h3>
                                <ul class="color-option sidbar-style">
                                    <li>
                                        <span class="white"></span>
                                        <a href="#">white (4)</a>
                                    </li>
                                    <li>
                                        <span class="orange"></span>
                                        <a href="#">Orange (2)</a>
                                    </li>
                                    <li>
                                        <span class="blue"></span>
                                        <a href="#">Blue (6)</a>
                                    </li>
                                    <li>
                                        <span class="yellow"></span>
                                        <a href="#">Yellow (8)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Color End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">Components</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">cotton (4)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">polyester (4)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">Viscose (5)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">Styles</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">casual (5)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">dressy (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">girly (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie">
                                <h3 class="sidebar-title">Properties</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">colorful dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">maxi dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">midi dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">short dress (4) </label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">short sleve (3) </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                        </div>
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="grid-list-view d-flex align-items-center  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#grid-view">
                                            <i class="fa fa-th"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#list-view" id="lista-prod">
                                            <i class="fa fa-list-ul"></i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="show-items">There are 8 products.</span>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-md-flex align-items-center">
                                    <label>Sort By:</label>
                                    <select class="sorter wide">
                                        <option value="Position">Relevance</option>
                                        <option value="Product Name">Neme, A to Z</option>
                                        <option value="Product Name">Neme, Z to A</option>
                                        <option value="Price">Price low to heigh</option>
                                        <option value="Price">Price heigh to low</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>
                        <!-- Grid & List View End -->
                        <div class="shop-area mb-all-40">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content">
                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="row border-hover-effect outer_div">                                        
                                
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane fade fix outer_list">
                                    
                                </div>
                                <!-- #list view End -->
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                        <!-- Shop Breadcrumb Area Start -->
                        <div class="shop-breadcrumb-area border-default paginator">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-5">
                                    <span class="show-items">Producto 1 al 9 de 250 item(s) </span>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-7">
                                    <ul class="pfolio-breadcrumb-list text-center">
                                        <li class="float-left prev">
                                            <a href="#">
                                                <i class="fa fa-angle-left" aria-hidden="true"></i>Anterior</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li class="float-right next">
                                            <a href="#">Siguiente
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Breadcrumb Area End -->
                    </div>
                    <!-- product Categorie List End -->
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