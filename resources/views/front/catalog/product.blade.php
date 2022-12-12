@extends('front.layouts.layout')

@section('content')

    <!-- Shop-details start -->
    <section class="shop-details-area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="shop-bred pt-35 pb-35">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Phones & Tablet</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Headphone</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ultra Wireless 550 Headphone With Bluetooth.</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 order-1 order-lg-1">
                    <div class="pro-img">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5"><img src="{{ asset('assets/front/img/allproducts/pro-details.jpg') }}" class="img-fluid" alt=""></div>

                            <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                                <img src="{{ asset('assets/front/img/allproducts/pro-details.jpg') }}" class="img-fluid" alt="">
                            </div>

                            <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
                                <img src="{{ asset('assets/front/img/allproducts/pro-details.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <ul class="nav" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-selected="true">
                                    <img src="{{ asset('assets/front/img/allproducts/pro-details-small-1.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile5" aria-selected="false">
                                    <img src="{{ asset('assets/front/img/allproducts/pro-details-small-2.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab5" data-toggle="tab" href="#contact5" role="tab" aria-controls="contact5" aria-selected="false">
                                    <img src="{{ asset('assets/front/img/allproducts/pro-details-small-3.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-3 order-lg-2">
                    <div class="pro-content">
                        <span>HEADPHONES</span>
                        <h5 class="title">Ultra Wireless 550 Headphone With A35 Bluetooth</h5>
                        <div class="pro-rating pb-40">
                            <a href="#" class="active"><i class="fas fa-star"></i></a>
                            <a href="#" class="active"><i class="fas fa-star"></i></a>
                            <a href="#" class="active"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#" class="review">(2 customer reviews)</a>
                        </div>
                        <div class="pro-social mb-45">
                            <a href="#"><img src="{{ asset('assets/front/img/payment/pro-details-social.jpg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="about-pro">
                            <ul class="mb-40">
                                <li>4.5 inch HD Touch Screen (1280 x 720)</li>
                                <li>Android 4.4 KitKat OS</li>
                                <li>1.4 GHz Quad Core™ Processor</li>
                                <li>20 MP front and 28 megapixel CMOS rear camera</li>
                                <li>Sed eiusmod tempor incididunt</li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy texting of the printings and
                                amet industry. Simply Dummy has been industry standard
                                of the printing and typesetting.</p>
                        </div>
                        <div class="pro-code pt-25">
                            <ul>
                                <li>SKU: <span>FW511948218</span></li>
                                <li>Tag: <span>HEADPHONE</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-2 order-lg-3">
                    <div class="cart-wrapper">
                        <div class="cart-title">
                            <h6>Availability: <span>In Stock</span></h6>
                        </div>
                        <div class="price mt-15 mb-20">
                            <span>$3,200.55</span>
                            <h4>$2,299.00</h4>
                        </div>
                        <form action="#">
                            <div class="field">
                                <label>Quantity:</label>
                                <input type="number" value="1">
                            </div>
                            <div class="field">
                                <label>Color:</label>
                                <select name="select">
                                    <option value="1">Rose Gold</option>
                                    <option value="2">Red Gold</option>
                                    <option value="3">Yellow Gold</option>
                                    <option value="4">Blue Gold</option>
                                    <option value="5">Gray Gold</option>
                                </select>
                            </div>
                        </form>
                        <a href="#" class="cart-button">Add To Cart</a>
                        <a href="#" class="buy-button">Buy Now</a>
                        <div class="last pt-15">
                            <a href="#">Add To Wishlist</a>
                            <a href="#">Compare</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop-details end -->

    <!-- Shop-details tab start -->
    <section class="shop-details-desc">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="desc-wrapper">
                        <ul class="nav custom-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab11" data-toggle="tab" href="#home11" role="tab" aria-controls="home11" aria-selected="true">Specification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab11" data-toggle="tab" href="#profile11" role="tab" aria-controls="profile11" aria-selected="false">Description </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab11" data-toggle="tab" href="#contact11" role="tab" aria-controls="contact11" aria-selected="false">Reviews(3)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade" id="home11" role="tabpanel" aria-labelledby="home-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <div class="spe-wrapper">
                                                <ul>
                                                    <li class="title">Additional information</li>
                                                    <li>Weight</li>
                                                    <li>1.4 oz</li>
                                                    <li>Dimensions</li>
                                                    <li>62 × 56 × 12 in</li>
                                                    <li>Size</li>
                                                    <li>XL, XXL, LG, SM, MD</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="profile11" role="tabpanel" aria-labelledby="profile-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Perfactly Done</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec
                                                    massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpUt id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum meta ultricies ex vulputate ac. Ut id
                                                    cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus ntincidunt eu.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Freshly Design</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae    egestas massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat.Ut id cursus tellus, non tempor quam. Morbi.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Fabolous Sound</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae    egestas massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat.Ut id cursus tellus, non tempor quam. Morbi.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Inteligent Bettery</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec
                                                    massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id
                                                    cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus
                                                    nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact11" role="tabpanel" aria-labelledby="contact-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Perfactly Done</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec
                                                    massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpUt id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum meta ultricies ex vulputate ac. Ut id
                                                    cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus ntincidunt eu.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Freshly Design</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae    egestas massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat.Ut id cursus tellus, non tempor quam. Morbi.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Fabolous Sound</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae    egestas massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat.Ut id cursus tellus, non tempor quam. Morbi.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <h5 class="title">Inteligent Bettery</h5>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec
                                                    massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id
                                                    cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus
                                                    nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop-details tab end -->

    <!-- Product  -->
    <div class="product pt-75 product-h-two">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-12">
                    <div class="section-header">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-sm-6">
                                <div class="product-section2">
                                    <h6 class="product--section__title2"><span>Best Related</span> On Latest Coming</h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="all__product--link text-right">
                                    <a class="all-link" href="shop-collection.html">Discover All Products<span
                                            class="lnr lnr-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="product__active owl-carousel">
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__content--top">
                                    <span class="cate-name">SAMSUNG</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                            Systems Purple Degree</a></h6>
                                </div>
                                <div class="product__thumb">
                                    <a href="product-details.html" class="img-wrapper">
                                        <img class="img" src="{{ asset('assets/front/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                        <img class="img secondary-img" src="{{ asset('assets/front/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                    </a>
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
                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                <a href="#"><span class="lnr lnr-sync"></span></a>
                            </div>
                        </div>
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__content--top">
                                    <span class="cate-name">SAMSUNG</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                            Systems Purple Degree</a></h6>
                                </div>
                                <div class="product__thumb">
                                    <a href="product-details.html" class="img-wrapper">
                                        <img class="img" src="{{ asset('assets/front/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                        <img class="img secondary-img" src="{{ asset('assets/front/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                    </a>
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
                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                <a href="#"><span class="lnr lnr-sync"></span></a>
                            </div>
                        </div>
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__content--top">
                                    <span class="cate-name">SAMSUNG</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                            Systems Purple Degree</a></h6>
                                </div>
                                <div class="product__thumb">
                                    <a href="product-details.html" class="img-wrapper">
                                        <img class="img" src="{{ asset('assets/front/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                        <img class="img secondary-img" src="{{ asset('assets/front/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                    </a>
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
                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                <a href="#"><span class="lnr lnr-sync"></span></a>
                            </div>
                        </div>
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__content--top">
                                    <span class="cate-name">SAMSUNG</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                            Systems Purple Degree</a></h6>
                                </div>
                                <div class="product__thumb">
                                    <a href="product-details.html" class="img-wrapper">
                                        <img class="img" src="{{ asset('assets/front/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                        <img class="img secondary-img" src="{{ asset('assets/front/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                    </a>
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
                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                <a href="#"><span class="lnr lnr-sync"></span></a>
                            </div>
                        </div>
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__content--top">
                                    <span class="cate-name">SAMSUNG</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                            Systems Purple Degree</a></h6>
                                </div>
                                <div class="product__thumb">
                                    <a href="product-details.html" class="img-wrapper">
                                        <img class="img" src="{{ asset('assets/front/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                        <img class="img secondary-img" src="{{ asset('assets/front/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                    </a>
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
                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                <a href="#"><span class="lnr lnr-sync"></span></a>
                            </div>
                        </div>
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__content--top">
                                    <span class="cate-name">SAMSUNG</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                            Systems Purple Degree</a></h6>
                                </div>
                                <div class="product__thumb">
                                    <a href="product-details.html" class="img-wrapper">
                                        <img class="img" src="{{ asset('assets/front/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                        <img class="img secondary-img" src="{{ asset('assets/front/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                    </a>
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
                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                <a href="#"><span class="lnr lnr-sync"></span></a>
                            </div>
                        </div>
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__content--top">
                                    <span class="cate-name">SAMSUNG</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                            Systems Purple Degree</a></h6>
                                </div>
                                <div class="product__thumb">
                                    <a href="product-details.html" class="img-wrapper">
                                        <img class="img" src="{{ asset('assets/front/img/allproducts/products__thumb__33.jpg') }}" alt="">
                                        <img class="img secondary-img" src="{{ asset('assets/front/img/allproducts/products__thumb__05.jpg') }}" alt="">
                                    </a>
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
                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                <a href="#"><span class="lnr lnr-sync"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product end -->

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
