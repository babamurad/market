@extends('front.layouts.layout')

@section('content')
    <!-- page banner area start -->
    <section class="page-banner-area blog-page mt-25" data-background="{{ asset('assets/front/img/bg/bangkit.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-text text-center pt-50 pb-45">
                        <h2 class="f-800 cod__black-color">Shop Products</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $brand->name }}.</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- shop cat area start -->
    <div class="top__featured--area feature-h-one pt-65 pb-80">
        <div class="container">
            <div class="row mb-10">
                <div class="col-sm-3 col-4">
                    <div class="cat-bar">
                        <div class="icon">
                            <a href="#"><i class="fas fa-bars"></i></a>
                        </div>
                        <span class="f-800 ">Brand</span>
                    </div>
                </div>
                <div class="col-sm-9 col-8">
                    <div class="shop-cat">
                        <div class="show-text d-none d-sm-block">
                            <span class="f-400">Showing 1–12 of 20 results</span>
                        </div>
                        <div class="select-text">
                            <select name="select">
                                <option value="1">Short By New</option>
                                <option value="2">Short By 01 </option>
                                <option value="3">Short By 02 </option>
                                <option value="4">Short By 03 </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="product__single mb-30">
                        <div class="product__box featured__box--item">
                            <div class="product__thumb">
                                <a href="product-details.html"><img class="img" src="{{ asset('assets/front/img/allproducts/products__thumb__11.jpg') }}" alt=""></a>
                            </div>
                            <div class="product--flex__right">
                                <div class="product__content--top">
                                    <span class="cate-name">SAMSUNG</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-30"><a href="product-details.html">{{ $product->name }}</a></h6>
                                </div>
                                <div class="product__content--rating d-flex justify-content-between">
                                    <div class="rating">
                                        <ul class="list-inline">
                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <h5 class="grenadier-color f-600">$ {{ $product->price }}</h5>
                                    </div>
                                </div>
                            </div>
                            <span class="new">NEW</span>
                            <span class="sale">SALE</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $products->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
    <!-- shop cat area end -->

    <!-- Subscribe -->
    <div class="subscribe subscribe--area grenadier-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                        <div class="left d-flex justify-content-between align-items-center">
                            <div class="newsletter__title">
                                <span class="notification--icon"><img src="img/icon/notification-icon.png" alt="notification"></span>
                                <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                            </div>
                            <div class="newsletter--message d-none d-xl-block">
                                <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                    free delivery.</p>
                            </div>
                        </div>
                        <form class="right newsletter--form pos-rel">
                            <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                            <button class="btn newsletter--button" type="button"><img src="img/icon/plan-icon.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
@endsection
