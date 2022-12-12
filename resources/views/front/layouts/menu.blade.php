
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

                </ul>

                <!-- Extra shopping cart for mobile device end -->
                <div class="dept__menu position-relative d-none d-md-block">
                    <nav>
                        <ul class="dept__menu--list">
                            <li><a class="dept__menu-mlink f-900 cod__gray-color" href="JavaScript:Void(0);">Shop By Departments</a>
                                <ul class="dept__menu--dropdown open">
                                    @foreach($roots as $root)
                                        <li class="dropdown"><a class="dept__menu--dlink" href="{{ route('catalog.category', $root->slug) }}">{{ $root->title }}</a></li>
                                    @endforeach
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
                                <a href="{{ route('catalog.index') }}">Home</a>
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
                            <li class="dropdown-icon">
                                <a href="#">Brands</a>
                                <ul class="submenu">
                                    @foreach($brands as $brand)
                                        <li>
                                            <a href="{{ route('catalog.brand', $brand->slug) }}">{{ $brand->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="shop.html">Trending</a>
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
