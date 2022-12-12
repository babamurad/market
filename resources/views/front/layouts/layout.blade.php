<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shupmax - Multipurpose eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">
</head>

<body>

<!-- Header -->
<header class="header">
    <div class="top header__top gray-bg d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="message--header__top">
                        <p class="message m-0 dove__gray-color">Free Shipping Worldwide - On All Order Over $1000</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="menu--header__top text-right">
                        <nav class="nav--top__list">
                            <ul class="list-inline">
                                <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">store Locator</a></li>
                                <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">Track Orders</a></li>
                                <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">Credit Card</a></li>
                                <li class="nav--top__dropdown position-relative"><a class="nav--top__link lang--top__link dove__gray-color text-capitalize position-relative" href="#">English & Dollar<span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="dropdown-show">
                                        <li><a class="dove__gray-color text-capitalize" href="#"><span class="lang">canada</span><span class="currency">USD</span></a></li>
                                        <li><a class="dove__gray-color text-capitalize" href="#"><span class="lang">Bangladesh</span><span class="currency">TAKA</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle header__middle bg--header__middle pt-35 pb-35">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content--header__middle d-flex align-items-center justify-content-between">
                        <div class="logo--header__middle">
                            <div class="logo">
                                <a class="logo__link" href="index.html"><img src="{{ asset('assets/front/img/logo/h1__logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="search--header__middle h1search--header__middle">
                            <form class="search--header__form position-relative" action="#">
                                <div class="header--search__box">
                                    <input class="header--search__query" type="text" placeholder="Search For Products...">
                                    <button class="header--search__btn"><i class="icofont-search-2"></i></button>
                                </div>
                                <div class="header--search__cate">
                                    <select name="header-search" id="header--search__main">
                                        <option value="1">All Categories</option>
                                        <option value="1">Lamps & Lighting</option>
                                        <option value="1">Mattress & Bedding</option>
                                        <option value="1">Housekeeping</option>
                                        <option value="1">Showpiece & Wall Art</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="cart--header__middle d-none d-md-block">
                            <div class="cart--header__list">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fal fa-user-plus"></i></a></li>
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="mini__cart--link" href="#"><i class="fal fa-bags-shopping"><span class="cart__count">3</span></i><span class="cart__amount">$ 3550</span></a></li>
                                </ul>
                            </div>
                            <div class="mini__cart--box">
                                <ul>
                                    <li class="mb-20">
                                        <div class="cart-image">
                                            <a href="#"><img src="{{ asset('assets/front/img/allproducts/cart__thumb__1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="cart-text">
                                            <a href="#" class="title f-400 cod__black-color">Pink Jacket</a>
                                            <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                        </div>
                                        <div class="del-button">
                                            <a href="#"><i class="icofont-close-line"></i></a>
                                        </div>
                                    </li>
                                    <li class="mb-20">
                                        <div class="cart-image">
                                            <a href="#"><img src="{{ asset('assets/front/img/allproducts/cart__thumb__2.jpg') }} " alt=""></a>
                                        </div>
                                        <div class="cart-text">
                                            <a href="#" class="title f-400 cod__black-color">Silk Glows</a>
                                            <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                        </div>
                                        <div class="del-button">
                                            <a href="#"><i class="icofont-close-line"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="total-text d-flex justify-content-between">
                                            <span class="f-800 cod__black-color">Total Bag </span>
                                            <span class="f-800 cod__black-color">$ 99.00</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="checkout">Checkout</a>
                                            <a href="#" class="viewcart">View Cart</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom header__bottom header__bottom--border custom-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5 col-10">
                    <!-- Extra shopping cart for mobile device start -->
                    <div class="cart--header__middle d-block d-md-none">
                        <div class="cart--header__list">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fal fa-user-plus"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a class="mini__cart--link" href="#"><i class="fal fa-bags-shopping"><span class="cart__count">3</span></i><span class="cart__amount">$ 3550</span></a></li>
                            </ul>
                        </div>
                        <div class="mini__cart--box">
                            <ul>
                                <li class="mb-20">
                                    <div class="cart-image">
                                        <a href="#"><img src="{{ asset('assets/front/img/allproducts/cart__thumb__1.jpg') }} " alt=""></a>
                                    </div>
                                    <div class="cart-text">
                                        <a href="#" class="title f-400 cod__black-color">Pink Jacket</a>
                                        <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                    </div>
                                    <div class="del-button">
                                        <a href="#"><i class="icofont-close-line"></i></a>
                                    </div>
                                </li>
                                <li class="mb-20">
                                    <div class="cart-image">
                                        <a href="#"><img src="{{ asset('assets/front/img/allproducts/cart__thumb__2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="cart-text">
                                        <a href="#" class="title f-400 cod__black-color">Silk Glows</a>
                                        <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                    </div>
                                    <div class="del-button">
                                        <a href="#"><i class="icofont-close-line"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="total-text d-flex justify-content-between">
                                        <span class="f-800 cod__black-color">Total Bag </span>
                                        <span class="f-800 cod__black-color">$ 99.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="checkout">Checkout</a>
                                        <a href="#" class="viewcart">View Cart</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul>
                        @foreach($root as $rcat)
                            <li><a href="{{ route('catalog.category', $rcat->slug) }}">{{ $rcat->title }}</a></li>
                        @endforeach
                    </ul>

                    <!-- Extra shopping cart for mobile device end -->
                    <div class="dept__menu position-relative d-none d-md-block">
                        <nav>
                            <ul class="dept__menu--list">
                                <li><a class="dept__menu-mlink f-900 cod__gray-color" href="JavaScript:Void(0);">Shop By Departments</a>
                                    <ul class="dept__menu--dropdown open">
                                        <li class="dropdown"><a class="dept__menu--dlink" href="#">Lamps & Lighting</a>
                                            <ul class="sub__menu sub__dept--menu">
                                                <li><a href="#">Desktop</a></li>
                                                <li class="dropdown"><a href="#">Laptop</a>
                                                    <ul class="sub__menu level2">
                                                        @foreach($root as $rcat)
                                                        <li><a href="#">{{ $rcat->title }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tablet</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dept__menu--dlink" href="#">Mattress & Bedding</a>
                                            <ul class="sub__menu sub__dept--menu">
                                                <li><a href="#">Desktop</a></li>
                                                <li class="dropdown"><a href="#">Laptop</a>
                                                    <ul class="sub__menu level2">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li><a href="#">Laptop</a></li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tablet</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dept__menu--dlink" href="#">Home wares</a>
                                            <ul class="sub__menu sub__dept--menu">
                                                <li><a href="#">Desktop</a></li>
                                                <li class="dropdown"><a href="#">Laptop</a>
                                                    <ul class="sub__menu level2">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li><a href="#">Laptop</a></li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tablet</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dept__menu--dlink" href="#">Housekeeping</a>
                                            <ul class="sub__menu sub__dept--menu">
                                                <li><a href="#">Desktop</a></li>
                                                <li class="dropdown"><a href="#">Laptop</a>
                                                    <ul class="sub__menu level2">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li><a href="#">Laptop</a></li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tablet</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dept__menu--dlink" href="#">Showpiece & Wall Art</a></li>
                                        <li><a class="dept__menu--dlink" href="#">Dining & Cabinetry</a></li>
                                        <li class="dropdown"><a class="dept__menu--dlink" href="#">Ceiling Light</a>
                                            <ul class="sub__menu sub__dept--menu">
                                                <li><a href="#">Desktop</a></li>
                                                <li class="dropdown"><a href="#">Laptop</a>
                                                    <ul class="sub__menu level2">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li><a href="#">Laptop</a></li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tablet</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dept__menu--dlink" href="#">Festive & Outdoor</a>
                                            <ul class="sub__menu sub__dept--menu">
                                                <li><a href="#">Desktop</a></li>
                                                <li class="dropdown"><a href="#">Laptop</a>
                                                    <ul class="sub__menu level2">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li><a href="#">Laptop</a></li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tablet</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dept__menu--dlink" href="#">Comfoters & Sheets</a></li>
                                        <li class="dropdown"><a class="dept__menu--dlink" href="#">Other Accessories</a>
                                            <ul class="sub__menu sub__dept--menu">
                                                <li><a href="#">Desktop</a></li>
                                                <li class="dropdown"><a href="#">Laptop</a>
                                                    <ul class="sub__menu level2">
                                                        <li><a href="#">Desktop</a></li>
                                                        <li><a href="#">Laptop</a></li>
                                                        <li><a href="#">Mobile</a></li>
                                                        <li><a href="#">Tablet</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Tablet</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-2">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="dropdown-icon">
                                    <a href="index.html">Home</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="index.html">Home Furniture</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home Electronics</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">Home Fashion</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="mega-menu static dropdown-icon">
                                    <a href="shop.html">Shop</a>
                                    <ul class="submenu mega-full">
                                        <li>
                                            <a href="shop.html">Category 01</a>
                                            <ul class="submenu  level-1">
                                                <li>
                                                    <a href="shop.html">Furniture</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Fasion</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Bags</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Lather</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Category 02</a>
                                            <ul class="submenu  level-1">
                                                <li>
                                                    <a href="shop.html">Electronics</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Chair</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Table</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Book</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Category 03</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="shop.html">Clock</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Watch</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Mobile</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">sunglass</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Category 04</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="shop.html">Chair</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Lather</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Table</a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Clock</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-icon">
                                    <a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                        <li>
                                            <a href="product-details.html">Product Details</a>
                                        </li>
                                        <li>
                                            <a href="product-details2.html">Product Details</a>
                                        </li>
                                        <li>
                                            <a href="registration.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="shop-cat-three.html">Shop Category 03</a>
                                        </li>
                                        <li>
                                            <a href="shop-collection.html">Shop Category 01</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">Top Product</a>
                                </li>
                                <li>
                                    <a href="shop.html">Trending</a>
                                </li>
                                <li>
                                    <a href="shop.html">Electronics</a>
                                </li>
                                <li>
                                    <a href="shop.html">Furniture</a>
                                </li>
                                <li class="dropdown-icon">
                                    <a href="blog.html">Blog</a>
                                    <ul class="submenu  level-1">
                                        <li>
                                            <a href="blog.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-sidebar.html">Blog Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header end /-->

@yield('content')

<!-- Footer -->
<footer class="footer--area">
    <div class="footer--top pt-70 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-8 mb-30">
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h6 class="f-800">Contact Information</h6>
                        </div>
                        <div class="contacts-address">
                            <div class="contacts-icon">
                                <i class="icofont-headphone-alt-3"></i>
                            </div>
                            <div class="contacts-address--text">
                                <span>Got Questions? Call Us 24/7</span>
                                <h5 class="f-800">1800 665 222 / 1800 555 200</h5>
                            </div>
                        </div>
                        <div class="contacts-address--footer">
                            <p>502 New Design Str, Melbourne, Australia <a href="mailto:contact@martfury.co">contact@martfury.co</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h6 class="f-800">Get to Know Us</h6>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press Releases</a></li>
                                <li><a href="#">Cart Cares</a></li>
                                <li><a href="#">Gift a Smile</a></li>
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Returns Center</a></li>
                                <li><a href="#">100% Purchase Protection</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 mb-30 col-lg-6 col-md-4 order-md-2 order-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h6 class="f-800">Get to Know Us</h6>
                        </div>
                        <div class="footer-menu h1foote-menu2">
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Youtube</a></li>
                                <li><a href="#">Pintrest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-4 mb-30 order-md-4 order-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h6 class="f-800">Let Us Help You</h6>
                        </div>
                        <div class="footer-menu h1foote-menu2">
                            <ul>
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Returns Centre</a></li>
                                <li><a href="#">100% Purchase Protection</a></li>
                                <li><a href="#">Cartbit App Download</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom gray-bg pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-copyright">
                        <p class="m-0">Copyright 2020 ShopMax.com All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-payment--sponsors text-right">
                        <a href="#" class="payment-images"><img src="{{ asset('assets/front/img/payment/payment-thumb.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- JS here -->
<script src="{{ asset('assets/front/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/jquery-1.12.4.min.js') }} "></script>
<script src="{{ asset('assets/front/js/popper.min.js') }} "></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }} "></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }} "></script>
<script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }} "></script>
<script src="{{ asset('assets/front/js/one-page-nav-min.js') }} "></script>
<script src="{{ asset('assets/front/js/slick.min.js') }} "></script>
<script src="{{ asset('assets/front/js/ajax-form.js') }} "></script>
<script src="{{ asset('assets/front/js/wow.min.js') }} "></script>
<script src="{{ asset('assets/front/js/jquery.scrollUp.min.js') }} "></script>
<script src="{{ asset('assets/front/js/imagesloaded.pkgd.min.js') }} "></script>
<script src="{{ asset('assets/front/js/jquery.nice-select.min.js') }} "></script>
<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }} "></script>
<script src="{{ asset('assets/front/js/jquery.countdown.min.js') }} "></script>
<script src="{{ asset('assets/front/js/jquery-ui-slider-range.js') }} "></script>
<script src="{{ asset('assets/front/js/jquery.elevateZoom-3.0.8.min.js') }} "></script>
<script src="{{ asset('assets/front/js/meanmenu.min.js') }} "></script>
<script src="{{ asset('assets/front/js/Elemental.js') }} "></script>
<script src="{{ asset('assets/front/js/plugins.js') }} "></script>
<script src="{{ asset('assets/front/js/main.js') }} "></script>
</body>

</html>
