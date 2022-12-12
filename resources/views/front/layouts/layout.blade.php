<!doctype html>
<html class="no-js" lang="ru">

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
    @if(Request::route()->getName() == 'catalog.product')
    @include('front.layouts.product-menu')
    @else
    @include('front.layouts.menu')
    @endif
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
