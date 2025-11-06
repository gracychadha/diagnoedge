@extends("website.layout.master-layout")

@section("title", "Welcome To Diagnoedge Labs")

@section("content")
    <main class="main">
        <!-- hero section start -->
        <section class="hero-section-1" data-img-src="assets/images/hero/banner_bg.png">
            <!-- hero shape start -->
            <div class="hero-shape">
                <img class="hero-shape-one" src="assets/images/shape/shape-4.png" alt="hero shape one">
                <img class="hero-shape-two" src="assets/images/shape/square-blue.png" alt="hero shape two">
                <img class="hero-shape-three" src="assets/images/shape/plus-orange.png" alt="hero shape three">
            </div>
            <!-- hero shape end -->
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <!-- hero content start -->
                        <div class="hero-content wow fadeInUp" data-wow-delay=".2s">
                            <!-- section title start -->
                            <div class="section-title">
                                <span class="sub-title">Welcome Carenix</span>
                                <h1>Your eye health our priority</h1>
                                <p class="text-black">
                                    Experience healthcare you can rely on. Our compassionate and skilled team is committed
                                    to providing you with exceptional care, ensuring your well-being is always our top
                                    priority.
                                </p>
                            </div>
                            <!-- section title end -->
                            <!-- hero button wappper start -->
                            <div class="hero-button-wappper">
                                <a href="appointment.html" class="theme-button style-1" aria-label="Book Appointment">
                                    <span data-text="Book Appointment">Book Appointment</span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </a>
                                <a href="services.html" class="theme-button style-2" aria-label="Our Services">
                                    <span data-text="Our Services">Our Services</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <!-- hero button wappper end -->
                        </div>
                        <!-- hero content end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- hero image start -->
                        <div class="hero-image wow fadeInUp" data-wow-delay=".3s">
                            <div class="row align-items-end">
                                <div class="col-6">
                                    <!-- hero image left start -->
                                    <div class="hero-image-left">
                                        <figure class="image-anime">
                                            <img src="assets/images/hero/hero-1-1.jpg" alt="hero image one">
                                        </figure>
                                    </div>
                                    <!-- hero image left end -->
                                </div>
                                <div class="col-6">
                                    <!-- hero image right start -->
                                    <div class="hero-image-right">
                                        <div class="hero-image-right-top">
                                            <figure class="image-anime">
                                                <img src="assets/images/hero/hero-1-2.jpg" alt="hero image two">
                                            </figure>
                                        </div>
                                        <div class="hero-image-right-bottom">
                                            <figure class="image-anime">
                                                <img src="assets/images/hero/hero-1-3.jpg" alt="hero image three">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- hero image right end -->
                                </div>
                            </div>
                            <!-- round shape start -->
                            <div class="round-shape">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <!-- round shape end -->
                        </div>
                        <!-- hero image end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end -->

        <!-- micon section start -->
        <section class="micon-section pt-100 md-pt-80 pb-70 md-pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!-- micon items start -->
                        <div class="micon-items micon-items-one wow fadeInUp" data-wow-delay=".2s">
                            <div class="micon-icon">
                                <figure>
                                    <img src="assets/images/micon/book-appointment.png" alt="micon book appointment">
                                </figure>
                            </div>
                            <div class="micon-content">
                                <h2>Book Appointment</h2>
                                <p>Choose a date and time that works for you we'll take care of the rest.</p>
                                <div class="micon-button">
                                    <a href="appointment.html" class="read-more-btn">Request an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <!-- micon items end -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- micon items start -->
                        <div class="micon-items micon-items-two wow fadeInUp" data-wow-delay=".3s">
                            <div class="micon-icon">
                                <figure>
                                    <img src="assets/images/micon/qualified-doctors.png" alt="micon qualified doctors">
                                </figure>
                            </div>
                            <div class="micon-content">
                                <h2>Qualified Doctors</h2>
                                <p>Our team of expert doctors ensures top-quality treatment every time.</p>
                                <div class="micon-button">
                                    <a href="doctor.html" class="read-more-btn">View All Doctor</a>
                                </div>
                            </div>
                        </div>
                        <!-- micon items end -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- micon items start -->
                        <div class="micon-items micon-items-three wow fadeInUp" data-wow-delay=".4s">
                            <div class="micon-icon">
                                <figure>
                                    <img src="assets/images/micon/services.png" alt="micon services">
                                </figure>
                            </div>
                            <div class="micon-content">
                                <h2>24/7 Services</h2>
                                <p>24/7 care you can count on anybody, anytime, anywhere.</p>
                                <div class="micon-button">
                                    <a href="contact.html" class="read-more-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!-- micon items end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- micon section end -->

        <!-- about section start -->
        <section class="about-section-1 pb-100 md-pb-80">
            <div class="about-shape-1">
                <figure>
                    <img src="assets/images/about/about-shape-1.png" alt="about shape one">
                </figure>
            </div>
            <div class="about-shape-2">
                <figure>
                    <img src="assets/images/about/about-shape-2.png" alt="about shape two">
                </figure>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <!-- section title start -->
                        <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title">About Us</span>
                            <h2>Personalized vision care with a patient first approach</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis dolore
                                et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam obcaecati
                                accusantium.</p>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <!-- about image start -->
                        <div class="about-image">
                            <!-- about img 1 start -->
                            <div class="about-img-1 text-center">
                                <figure class="image-anime">
                                    <img src="assets/images/about/about-1-1.jpg" alt="about image one">
                                </figure>
                            </div>
                            <!-- about img 1 end -->
                        </div>
                        <!-- about image end -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <!-- about content start -->
                        <div class="about-content">
                            <!-- about features wappper start -->
                            <div class="about-features-wappper">
                                <!-- about features item start -->
                                <div class="about-features-item">
                                    <div class="about-features-icon">
                                        <figure>
                                            <img src="assets/images/about/icon-about-1.png" alt="icon about one">
                                        </figure>
                                    </div>
                                    <div class="about-features-title">
                                        <h3>Personalized eye exams</h3>
                                        <p>There are many variations of pasrsfgses of Lorem Ipsum btmred ine form injected
                                            humour.</p>
                                    </div>
                                </div>
                                <!-- about features item end -->
                                <!-- about features item start -->
                                <div class="about-features-item">
                                    <div class="about-features-icon">
                                        <figure>
                                            <img src="assets/images/about/icon-about-2.png" alt="icon about two">
                                        </figure>
                                    </div>
                                    <div class="about-features-title">
                                        <h3>Chronic eye conditions</h3>
                                        <p>There are many variations of pasrsfgses of Lorem Ipsum btmred ine form injected
                                            humour.</p>
                                    </div>
                                </div>
                                <!-- about features item end -->
                                <!-- about features item start -->
                                <div class="about-features-item">
                                    <div class="about-features-icon">
                                        <figure>
                                            <img src="assets/images/about/icon-about-3.png" alt="icon about three">
                                        </figure>
                                    </div>
                                    <div class="about-features-title">
                                        <h3>Based vision planning</h3>
                                        <p>There are many variations of pasrsfgses of Lorem Ipsum btmred ine form injected
                                            humour.</p>
                                    </div>
                                </div>
                                <!-- about features item end -->
                            </div>
                            <!-- about features wappper end-->
                            <!-- hero button wappper start -->
                            <div class="about-button-wappper">
                                <a href="about.html" class="theme-button style-1" aria-label="More About Us">
                                    <span data-text="More About Us">More About Us</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <!-- hero button wappper end -->
                        </div>
                        <!-- about content end -->
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                        <!-- about image start -->
                        <div class="about-image">
                            <!-- about img 2 start -->
                            <div class="about-img-2">
                                <figure class="image-anime">
                                    <img src="assets/images/about/about-1-2.jpg" alt="about image two">
                                </figure>
                            </div>
                            <!-- about img 2 end -->
                        </div>
                        <!-- about image end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->


        <!-- product section start -->
        <section class="product-section background-one pt-100 md-pt-50 pb-70 md-pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title">Best Health Tests</span>
                            <h2>Good health starts with regular health tests</h2>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                {{-- section for test packages start--}}
                <div class="container pt-20">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title start -->
                            <h5 class="text-center pt-20 pb-20">Tru Health Packages</h5>
                            <!-- section title end -->
                        </div>
                        <!-- pricing tabs start -->
                        <div class="pricing-tabs">
                            <!-- nav start -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link" id="nav-male-THP-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-male-THP" type="button" role="tab" aria-controls="nav-male-THP"
                                        aria-selected="false">For Male</button>
                                    <button class="nav-link active" id="nav-THP-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-THP" type="button" role="tab" aria-controls="nav-THP"
                                        aria-selected="true">Tru Health Packages</button>

                                    <button class="nav-link" id="nav-female-THP-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-female-THP" type="button" role="tab"
                                        aria-controls="nav-female-THP" aria-selected="false">For Female</button>
                                </div>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- pricing tabs end -->
                    </div>
                </div>
                <div class="tab-content">
                    {{-- active tab THP --}}
                    <div class="tab-pane fade active show" id="nav-THP" role="tabpanel" aria-labelledby="nav-THP-tab"
                        tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale one">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-1.png" alt="product image one">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale three">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-3.png"
                                                    alt="product image three"></figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller four"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-4.png" alt="product image four">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Swiper Container End -->

                    </div>
                    {{-- male tab THP --}}
                    <div class="tab-pane fade  show" id="nav-male-THP" role="tabpanel" aria-labelledby="nav-male-THP-tab"
                        tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale one">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-1.png" alt="product image one">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale three">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-3.png"
                                                    alt="product image three"></figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller four"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-4.png" alt="product image four">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Swiper Container End -->
                    </div>
                    {{-- female tab THP --}}
                    <div class="tab-pane fade  show" id="nav-female-THP" role="tabpanel"
                        aria-labelledby="nav-female-THP-tab" tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale one">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-1.png" alt="product image one">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale three">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-3.png"
                                                    alt="product image three"></figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller four"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-4.png" alt="product image four">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Swiper Container End -->
                    </div>
                </div>
            </div>

            {{-- section for test packages start FOR Popular Tests--}}
            <div class="container pt-60">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- pricing tabs start -->
                        <div class="pricing-tabs">
                            <!-- section title start -->
                            <h5 class="text-center pt-20 pb-20">Popular Tests Packages</h5>
                            <!-- section title end --></nav>
                            <!-- nav start -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link" id="nav-male-PT-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-male-PT" type="button" role="tab" aria-controls="nav-male-PT"
                                        aria-selected="false">For Male</button>
                                    <button class="nav-link active" id="nav-PT-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-PT" type="button" role="tab" aria-controls="nav-PT"
                                        aria-selected="true">Popular Tests Packages</button>

                                    <button class="nav-link" id="nav-female-PT-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-female-PT" type="button" role="tab"
                                        aria-controls="nav-female-PT" aria-selected="false">For Female</button>
                                </div>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- pricing tabs end -->
                    </div>
                </div>
                <div class="tab-content">
                    {{-- active tab PT --}}
                    <div class="tab-pane fade active show" id="nav-PT" role="tabpanel" aria-labelledby="nav-PT-tab"
                        tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale one">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-1.png" alt="product image one">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale three">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-3.png"
                                                    alt="product image three"></figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller four"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-4.png" alt="product image four">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Swiper Container End -->

                    </div>
                    {{-- male tab PT --}}
                    <div class="tab-pane fade  show" id="nav-male-PT" role="tabpanel" aria-labelledby="nav-male-PT-tab"
                        tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale one">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-1.png" alt="product image one">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale three">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-3.png"
                                                    alt="product image three"></figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller four"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-4.png" alt="product image four">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Swiper Container End -->
                    </div>
                    {{-- female tab PT --}}
                    <div class="tab-pane fade  show" id="nav-female-PT" role="tabpanel" aria-labelledby="nav-female-THP-tab"
                        tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale one">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-1.png" alt="product image one">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller two"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-2.png" alt="product image two">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/sale.png" alt="sale three">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-3.png"
                                                    alt="product image three"></figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-grid-item-1 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="product-tags">
                                            <div class="product-tags-sale">
                                                <figure><img src="assets/images/product/bestseller.png"
                                                        alt="bestseller four"></figure>
                                            </div>
                                        </div>
                                        <div class="product-grid-image">
                                            <figure><img src="assets/images/product/product-4.png" alt="product image four">
                                            </figure>
                                            <div class="product-grid-action">
                                                <a href="shop.html" class="icon-btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="shop.html" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="wishlist.html" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="shop-details.html">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="cart.html" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Swiper Container End -->
                    </div>
                </div>
            </div>
            <div class="container pt-60">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <h5 class="text-center pt-20 pb-60">Test by Health Risks</h5>
                        <!-- section title end -->
                    </div>

                    <div class="col-lg-12 services-section-1">
                        <!-- services slider start -->
                        <div class="swiper services-slider">
                            <!-- swiper wrapper start -->
                            <div class="swiper-wrapper">
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-1.png" alt="icon service one">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Cataract evaluation</a></h2>


                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-2.png" alt="icon service two">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Contact lens fitting</a></h2>

                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-3.png"
                                                    alt="icon service three">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Dry eye treatment</a></h2>

                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-4.png"
                                                    alt="icon service four">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Pediatric eye care</a></h2>

                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-5.png"
                                                    alt="icon service five">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Glaucoma surgery</a></h2>

                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-6.png" alt="icon service six">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Glaucoma &amp; cornea</a></h2>

                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                            </div>
                            <!-- swiper wrapper end -->
                            <!-- swiper actions start -->
                            <div class="swiper-actions text-center">
                                <div class="dot"></div>
                            </div>
                            <!-- swiper actions end -->
                        </div>
                        <!-- services slider end -->
                    </div>

                </div>
            </div>
            <div class="container pt-60">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <h5 class="text-center pt-20 pb-60">Test by Health Conditions</h5>
                        <!-- section title end -->
                    </div>

                    <div class="col-lg-12 services-section-1">
                        <!-- services slider start -->
                        <div class="swiper services-slider">
                            <!-- swiper wrapper start -->
                            <div class="swiper-wrapper">
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-1.png" alt="icon service one">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Cataract evaluation</a></h2>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-2.png" alt="icon service two">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Contact lens fitting</a></h2>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-3.png"
                                                    alt="icon service three">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Dry eye treatment</a></h2>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-4.png"
                                                    alt="icon service four">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Pediatric eye care</a></h2>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-5.png"
                                                    alt="icon service five">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Glaucoma surgery</a></h2>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-6.png" alt="icon service six">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Glaucoma &amp; cornea</a></h2>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                            </div>
                            <!-- swiper wrapper end -->
                            <!-- swiper actions start -->
                            <div class="swiper-actions text-center">
                                <div class="dot"></div>
                            </div>
                            <!-- swiper actions end -->
                        </div>
                        <!-- services slider end -->
                    </div>

                </div>
            </div>
            </div>
        </section>
        <!-- product section end -->

        <!-- why-section start -->
        <section class="why-choose-section-1 pt-100 md-pt-80 pb-100 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- why content start -->
                        <div class="why-content">
                            <!-- section-title start -->
                            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">Why Choose Us</span>
                                <h2>Compassion and expertise, perfectly combined</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.</p>
                            </div>
                            <!-- section-title end -->
                            <!-- why choose box list start -->
                            <div class="why-choose-box-list wow fadeInUp" data-wow-delay=".3s">
                                <!-- why choose box start -->
                                <div class="why-choose-box">
                                    <div class="icon-box">
                                        <figure>
                                            <img src="assets/images/why-choose/icon-why-choose-1.png"
                                                alt="icon why choose one">
                                        </figure>
                                    </div>
                                    <div class="why-choose-box-content">
                                        <h3>Patient centered</h3>
                                        <p>There are many variations of lorem Ipsum btmred ine form injected humour.</p>
                                    </div>
                                </div>
                                <!-- why choose box end -->
                                <!-- why choose box start -->
                                <div class="why-choose-box">
                                    <div class="icon-box">
                                        <figure>
                                            <img src="assets/images/why-choose/icon-why-choose-2.png"
                                                alt="icon why choose two">
                                        </figure>
                                    </div>
                                    <div class="why-choose-box-content">
                                        <h3>Emergency support</h3>
                                        <p>There are many variations of lorem Ipsum btmred ine form injected humour.</p>
                                    </div>
                                </div>
                                <!-- why choose box end -->
                            </div>
                            <!-- why choose box list end -->
                            <!-- why choose list start -->
                            <div class="why-choose-list wow fadeInUp" data-wow-delay=".4s">
                                <ul>
                                    <li>Strategic eye care planning</li>
                                    <li>Highly skilled medical team</li>
                                </ul>
                            </div>
                            <!-- why choose list end -->
                        </div>
                        <!-- why content end -->
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- why choose image start -->
                        <div class="why-choose-image">
                            <!-- why choose img 1 start -->
                            <div class="why-choose-img-1">
                                <figure class="image-anime">
                                    <img src="assets/images/why-choose/why-choose-img-1-1.jpg" alt="why choose image one">
                                </figure>
                            </div>
                            <!-- why choose img 1 end -->
                            <!-- why choose img 2 start -->
                            <div class="why-choose-img-2">
                                <figure class="image-anime">
                                    <img src="assets/images/why-choose/why-choose-img-1-2.jpg" alt="why choose image two">
                                </figure>
                            </div>
                            <!-- why choose img 2 end -->
                            <!-- why choose about circle start -->
                            <div class="why-choose-about-circle">
                                <a class="about-circle" href="about.html" aria-label="about circle">
                                    <img src="assets/images/shape/round-about-us.png" alt="round about us">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <!-- why choose contact circle end -->
                        </div>
                        <!-- why choose image end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- why-section end -->

        <!-- services section start -->
        <section class="services-section-1 background-one pt-100 md-pt-80 pb-100 md-pb-80"
            data-img-src="assets/images/shape/bg-shape-1.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title area start -->
                        <div class="section-title-area">
                            <div class="section-title wow fadeInLeft" data-wow-delay=".2s">
                                <span class="sub-title">Our Services</span>
                                <h2>Best explore our wellness services</h2>
                            </div>
                            <div class="section-title-content wow fadeInRight" data-wow-delay=".2s">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.</p>
                            </div>
                        </div>
                        <!-- section title area end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- services slider start -->
                        <div class="swiper services-slider">
                            <!-- swiper wrapper start -->
                            <div class="swiper-wrapper">
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-1.png" alt="icon service one">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Cataract evaluation</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="services-details.html" class="read-more-btn">More Details</a>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-2.png" alt="icon service two">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Contact lens fitting</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="services-details.html" class="read-more-btn">More Details</a>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-3.png"
                                                    alt="icon service three">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Dry eye treatment</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="services-details.html" class="read-more-btn">More Details</a>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-4.png"
                                                    alt="icon service four">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Pediatric eye care</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="services-details.html" class="read-more-btn">More Details</a>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-5.png"
                                                    alt="icon service five">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Glaucoma surgery</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="services-details.html" class="read-more-btn">More Details</a>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- service items start -->
                                    <div class="service-items">
                                        <div class="service-icon">
                                            <figure>
                                                <img src="assets/images/services/icon-service-6.png" alt="icon service six">
                                            </figure>
                                        </div>
                                        <div class="service-content">
                                            <h2><a href="services-details.html">Glaucoma &amp; cornea</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="services-details.html" class="read-more-btn">More Details</a>
                                        </div>
                                    </div>
                                    <!-- service items end -->
                                </div>
                                <!-- swiper slide end -->
                            </div>
                            <!-- swiper wrapper end -->
                            <!-- swiper actions start -->
                            <div class="swiper-actions text-center">
                                <div class="dot"></div>
                            </div>
                            <!-- swiper actions end -->
                        </div>
                        <!-- services slider end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- services section end -->

        <!-- portfolio section start -->
        <section class="portfolio-section-1 pt-100 md-pt-80 pb-100 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title area start -->
                        <div class="section-title-area">
                            <div class="section-title wow fadeInLeft" data-wow-delay=".2s">
                                <span class="sub-title">Our Portfolio</span>
                                <h2>Explore our showcase of featured works</h2>
                            </div>
                            <div class="section-title-content wow fadeInRight" data-wow-delay=".2s">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.</p>
                            </div>
                        </div>
                        <!-- section title area end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- portfolio items start -->
                        <div class="portfolio-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="portfolio-image">
                                <figure>
                                    <img src="assets/images/portfolio/portfolio-1-1.jpg" alt="portfolio image one">
                                </figure>
                            </div>
                            <div class="portfolio-content">
                                <div class="portfolio-title">
                                    <h3><a href="portfolio-details.html">Transitions Lenses</a></h3>
                                    <ul class="portfolio-meta">
                                        <li>Laser Eye Surgery</li>
                                        <li>Retina Checkup</li>
                                    </ul>
                                </div>
                                <div class="portfolio-button-wapper">
                                    <a href="services-details.html" class="portfolio-button-icon"
                                        aria-label="portfolio button icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio items end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- portfolio items start -->
                        <div class="portfolio-items wow fadeInUp" data-wow-delay=".4s">
                            <div class="portfolio-image">
                                <figure>
                                    <img src="assets/images/portfolio/portfolio-1-2.jpg" alt="portfolio image two">
                                </figure>
                            </div>
                            <div class="portfolio-content">
                                <div class="portfolio-title">
                                    <h3><a href="portfolio-details.html">Visual impairment</a></h3>
                                    <ul class="portfolio-meta">
                                        <li>Glaucoma Surgery</li>
                                        <li>Vision Correction</li>
                                    </ul>
                                </div>
                                <div class="portfolio-button-wapper">
                                    <a href="services-details.html" class="portfolio-button-icon"
                                        aria-label="portfolio button icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio items end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- portfolio items start -->
                        <div class="portfolio-items wow fadeInUp" data-wow-delay=".5s">
                            <div class="portfolio-image">
                                <figure>
                                    <img src="assets/images/portfolio/portfolio-1-3.jpg" alt="portfolio image three">
                                </figure>
                            </div>
                            <div class="portfolio-content">
                                <div class="portfolio-title">
                                    <h3><a href="portfolio-details.html">Cochrane Eyes &amp; Vision</a></h3>
                                    <ul class="portfolio-meta">
                                        <li>Cataract Surgery</li>
                                        <li>Vision Correction</li>
                                    </ul>
                                </div>
                                <div class="portfolio-button-wapper">
                                    <a href="services-details.html" class="portfolio-button-icon"
                                        aria-label="portfolio button icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio items end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- portfolio items start -->
                        <div class="portfolio-items wow fadeInUp" data-wow-delay=".6s">
                            <div class="portfolio-image">
                                <figure>
                                    <img src="assets/images/portfolio/portfolio-1-4.jpg" alt="portfolio image four">
                                </figure>
                            </div>
                            <div class="portfolio-content">
                                <div class="portfolio-title">
                                    <h3><a href="portfolio-details.html">Computerized Eye Exam</a></h3>
                                    <ul class="portfolio-meta">
                                        <li>Laser Eye Surgery</li>
                                        <li>Oculoplastic Surgery</li>
                                    </ul>
                                </div>
                                <div class="portfolio-button-wapper">
                                    <a href="services-details.html" class="portfolio-button-icon"
                                        aria-label="portfolio button icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio items end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- more portfolio content start -->
                        <div class="more-portfolio-content wow fadeInUp" data-wow-delay=".7s">
                            <p>From preventive care to specialized treatments, our wide range of services is designed to
                                support your health at every stage.</p>
                            <!-- portfolio button wappper start -->
                            <div class="service-button-wappper">
                                <a href="portfolio.html" class="theme-button style-1" aria-label="View All Portfolio">
                                    <span data-text="View All Portfolio">View All Portfolio</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <!-- portfolio button wappper end -->
                        </div>
                        <!-- more portfolio content end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio section end -->
        <!-- blog section start -->
        <section class="blog-section background-one pt-100 md-pt-80 pb-70 md-pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title">Blog &amp; Article</span>
                            <h2>Update with our latest trends &amp; insights</h2>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!-- blog grid item 1 start -->
                        <div class="blog-grid-item-1 wow fadeInUp" data-wow-delay=".3s">
                            <div class="blog-title">
                                <h3><a href="blog-details.html">How do Inherited Retinal Diseases Happen?</a></h3>
                            </div>
                            <ul class="blog-meta">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-user"></i>
                                        <span>Admin</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>March 14, 2025</span>
                                </li>
                            </ul>
                            <div class="blog-grid-image">
                                <a href="blog-details.html">
                                    <figure class="image-anime">
                                        <img src="assets/images/blog/blog-1.jpg" alt="blog image one">
                                    </figure>
                                </a>
                            </div>
                            <div class="blog-grid-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of
                                    a page when looking at its layout.</p>
                                <div class="blog-grid-button">
                                    <a href="blog-details.html" class="read-more-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog grid item 1 end -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- blog grid item 1 start -->
                        <div class="blog-grid-item-1 wow fadeInUp" data-wow-delay=".4s">
                            <div class="blog-title">
                                <h3><a href="blog-details.html">Protect your eyes from dust and disease</a></h3>
                            </div>
                            <ul class="blog-meta">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-user"></i>
                                        <span>Admin</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>March 15, 2025</span>
                                </li>
                            </ul>
                            <div class="blog-grid-image">
                                <a href="blog-details.html">
                                    <figure class="image-anime">
                                        <img src="assets/images/blog/blog-2.jpg" alt="blog image two">
                                    </figure>
                                </a>
                            </div>
                            <div class="blog-grid-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of
                                    a page when looking at its layout.</p>
                                <div class="blog-grid-button">
                                    <a href="blog-details.html" class="read-more-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog grid item 1 end -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- blog grid item 1 start -->
                        <div class="blog-grid-item-1 wow fadeInUp" data-wow-delay=".5s">
                            <div class="blog-title">
                                <h3><a href="blog-details.html">We're ready to enhance your clear vision</a></h3>
                            </div>
                            <ul class="blog-meta">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-user"></i>
                                        <span>Admin</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>March 17, 2025</span>
                                </li>
                            </ul>
                            <div class="blog-grid-image">
                                <a href="blog-details.html">
                                    <figure class="image-anime">
                                        <img src="assets/images/blog/blog-3.jpg" alt="blog image three">
                                    </figure>
                                </a>
                            </div>
                            <div class="blog-grid-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of
                                    a page when looking at its layout.</p>
                                <div class="blog-grid-button">
                                    <a href="blog-details.html" class="read-more-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog grid item 1 end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section end -->
        <!-- marquee ticker section start -->
        <div class="marquee-ticker-section">
            <div class="marquee-ticker-box">
                <div class="marquee-content">
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image one">
                    </div>
                    <p data-text="Online Consultation">
                        Online Consultation
                    </p>
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image two">
                    </div>
                    <p data-text="Book Appointment">
                        Book Appointment
                    </p>
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image three">
                    </div>
                    <p data-text="Quality Eyecare">
                        Quality Eyecare
                    </p>
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image four">
                    </div>
                    <p data-text="Health Screening">
                        Health Screening
                    </p>
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image five">
                    </div>
                    <p data-text="Emergency">
                        Emergency
                    </p>
                </div>
                <div class="marquee-content">
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image six">
                    </div>
                    <p data-text="Online Consultation">
                        Online Consultation
                    </p>
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image seven">
                    </div>
                    <p data-text="Book Appointment">
                        Book Appointment
                    </p>
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image eight">
                    </div>
                    <p data-text="Quality Eyecare">
                        Quality Eyecare
                    </p>
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image nine">
                    </div>
                    <p data-text="Health Screening">
                        Health Screening
                    </p>
                    <div class="marquee-icon">
                        <img src="assets/images/icon-sub-heading.svg" alt="marquee image ten">
                    </div>
                    <p data-text="Emergency">
                        Emergency
                    </p>
                </div>
            </div>
        </div>
        <!-- marquee ticker section end -->
        <!-- faq section start -->
        <section class="faq-section-1 pt-100 md-pt-80">
            <div class="container">
                <!-- faq wapper start -->
                <div class="faq-wapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- section title start -->
                            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">Faq's</span>
                                <h2>Clear answers to your questions</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.</p>
                            </div>
                            <!-- section title end -->
                            <!-- faq image start -->
                            <div class="faq-image wow fadeInUp" data-wow-delay=".3s">
                                <figure class="image-anime">
                                    <img src="assets/images/faqs/faqs-1-1.jpg" alt="faq image one">
                                </figure>
                            </div>
                            <!-- faq image end -->
                        </div>
                        <div class="col-lg-6">
                            <!-- faq-content start -->
                            <div class="faq-content wow fadeInUp" data-wow-delay=".2s">
                                <!-- accordion start -->
                                <div class="accordion" id="accordionExample">
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <!-- accordion-header start -->
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                What are common signs of serious eye problems?
                                            </button>
                                        </h2>
                                        <!-- accordion header end -->
                                        <!-- accordion collapse start -->
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <!-- accordion body start -->
                                            <div class="accordion-body">
                                                <div class="inner">
                                                    <div class="accordion-content">
                                                        <p>
                                                            It is a long established fact that a reader will be distracted
                                                            by the readable content of a page when looking at its layout.
                                                            The point of using Lorem Ipsum is that it has a
                                                            more-or-less normal distribution of letters, as opposed to using
                                                            'Content here, content here', making it look like readable
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- accordion body end -->
                                        </div>
                                        <!-- accordion collapse end -->
                                    </div>
                                    <!-- accordion item end -->
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <!-- accordion-header start -->
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Are contact lenses better than glasses?
                                            </button>
                                        </h2>
                                        <!-- accordion header end -->
                                        <!-- accordion collapse start -->
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <!-- accordion body start -->
                                            <div class="accordion-body">
                                                <div class="inner">
                                                    <div class="accordion-content">
                                                        <p>
                                                            It depends on your lifestyle. Contact lenses offer convenience
                                                            for sports and aesthetics, while glasses are easier to maintain
                                                            and cost-effective over time. An eye doctor
                                                            can help you decide what suits you best.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- accordion body end -->
                                        </div>
                                        <!-- accordion collapse end -->
                                    </div>
                                    <!-- accordion item end -->
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <!-- accordion-header start -->
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Are contact lenses safe to wear every day?
                                            </button>
                                        </h2>
                                        <!-- accordion header end -->
                                        <!-- accordion collapse start -->
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <!-- accordion body start -->
                                            <div class="accordion-body">
                                                <div class="inner">
                                                    <div class="accordion-content">
                                                        <p>Yes, as long as you follow proper hygiene and your eye doctor’s
                                                            instructions. Always clean and store lenses properly, and never
                                                            sleep in them unless advised.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- accordion body end -->
                                        </div>
                                        <!-- accordion collapse end -->
                                    </div>
                                    <!-- accordion item end -->
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <!-- accordion-header start -->
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                How often should I get my eyes checked?
                                            </button>
                                        </h2>
                                        <!-- accordion-header end -->
                                        <!-- accordion collapse start -->
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <!-- accordion body start -->
                                            <div class="accordion-body">
                                                <div class="inner">
                                                    <div class="accordion-content">
                                                        <p>
                                                            Adults should get a comprehensive eye exam every 1 to 2 years,
                                                            even if they have no vision issues. Children, seniors, and
                                                            individuals with existing conditions may need more
                                                            frequent visits.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- accordion body end -->
                                        </div>
                                        <!-- accordion collapse end-->
                                    </div>
                                    <!-- accordion item end -->
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <!-- accordion-header start -->
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                Why do we respect your time and prioritize you?
                                            </button>
                                        </h2>
                                        <!-- accordion-header end -->
                                        <!-- accordion collapse start -->
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <!-- accordion body start -->
                                            <div class="accordion-body">
                                                <div class="inner">
                                                    <div class="accordion-content">
                                                        <p>
                                                            It is a long established fact that a reader will be distracted
                                                            by the readable content of a page when looking at its layout.
                                                            The point of using Lorem Ipsum is that it has a
                                                            more-or-less normal distribution of letters, as opposed to using
                                                            'Content here, content here', making it look like readable
                                                            English
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- accordion body end -->
                                        </div>
                                        <!-- accordion collapse end-->
                                    </div>
                                    <!-- accordion item end -->
                                </div>
                                <!-- accordion end -->
                            </div>
                            <!-- faq-content end -->
                        </div>
                    </div>
                </div>
                <!-- faq wapper end -->
            </div>
        </section>
        <!-- faq section end -->

        <!-- pricing section start -->
        <section class="pricing-section-1 bg-section pt-100 md-pt-80 pb-70 md-pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title area start -->
                        <div class="section-title-area">
                            <div class="section-title wow fadeInLeft" data-wow-delay=".2s">
                                <span class="sub-title">Plans &amp; Pricing</span>
                                <h2>Our pricing is simple with no hidden fees</h2>
                            </div>
                            <div class="section-title-content wow fadeInRight" data-wow-delay=".2s">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.</p>
                            </div>
                        </div>
                        <!-- section title area end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- pricing tabs start -->
                        <div class="pricing-tabs wow fadeInUp" data-wow-delay=".3s">
                            <!-- nav start -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-monthly-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-monthly" type="button" role="tab" aria-controls="nav-monthly"
                                        aria-selected="true">Monthly</button>
                                    <button class="nav-link" id="nav-yearly-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-yearly" type="button" role="tab" aria-controls="nav-yearly"
                                        aria-selected="false">Yearly</button>
                                </div>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- pricing tabs end -->
                    </div>
                </div>
                <!-- tab content start -->
                <div class="tab-content wow fadeInUp" data-wow-delay=".4s">
                    <!-- tab pane start -->
                    <div class="tab-pane fade active show" id="nav-monthly" role="tabpanel"
                        aria-labelledby="nav-monthly-tab" tabindex="0">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-12">
                                <!-- pricing item start -->
                                <div class="pricing-item">
                                    <!-- pricing content start -->
                                    <div class="pricing-content">
                                        <!-- pricing text start -->
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Individual Plans</p>
                                            <h3 class="pricing-plan-price monthly_text">$30<span>/Monthly</span></h3>
                                            <p>This plan includes online consultation options for all users</p>
                                        </div>
                                        <!-- pricing text end -->
                                        <!-- pricing list start -->
                                        <div class="pricing-list">
                                            <p class="text-black">What's included?</p>
                                            <!-- check list start -->
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Routine Checkups</li>
                                                    <li>Medical Specialist</li>
                                                    <li>Nutritional Guidance</li>
                                                    <li>Professional Consultation</li>
                                                    <li>Online Booking</li>
                                                    <li>Emergency Care</li>
                                                </ul>
                                            </div>
                                            <!-- check list end -->
                                            <!-- pricing button wapper start -->
                                            <div class="pricing-button-wapper">
                                                <a href="pricing.html" class="theme-button style-2"
                                                    aria-label="Choose Plan">
                                                    <span data-text="Choose Plan">Choose Plan</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <!-- pricing button wapper end -->
                                        </div>
                                        <!-- pricing list end -->
                                    </div>
                                    <!-- pricing content end -->
                                </div>
                                <!-- pricing item end -->
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <!-- pricing item start -->
                                <div class="pricing-item tagged">
                                    <!-- pricing content start -->
                                    <div class="pricing-content">
                                        <!-- pricing text start -->
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">
                                                Family Plans
                                                <span>Popular</span>
                                            </p>
                                            <h3 class="pricing-plan-price monthly_text">$70<span>/Monthly</span></h3>
                                            <p class="text-white">This plan includes online consultation options for all
                                                users</p>
                                        </div>
                                        <!-- pricing text end -->
                                        <!-- pricing list start -->
                                        <div class="pricing-list">
                                            <p class="text-white">What's included?</p>
                                            <!-- check list start -->
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Routine Checkups</li>
                                                    <li>Medical Specialist</li>
                                                    <li>Nutritional Guidance</li>
                                                    <li>Professional Consultation</li>
                                                    <li>Online Booking</li>
                                                    <li>Emergency Care</li>
                                                </ul>
                                            </div>
                                            <!-- check list end -->
                                            <!-- pricing button wapper start -->
                                            <div class="pricing-button-wapper">
                                                <a href="pricing.html" class="theme-button style-4"
                                                    aria-label="Choose Plan">
                                                    <span data-text="Choose Plan">Choose Plan</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <!-- pricing button wapper end -->
                                        </div>
                                        <!-- pricing list end -->
                                    </div>
                                    <!-- pricing content end -->
                                </div>
                                <!-- pricing item end -->
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <!-- pricing item start -->
                                <div class="pricing-item">
                                    <!-- pricing content start -->
                                    <div class="pricing-content">
                                        <!-- pricing text start -->
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Group Plans</p>
                                            <h3 class="pricing-plan-price monthly_text">$90<span>/Monthly</span></h3>
                                            <p>This plan includes online consultation options for all users</p>
                                        </div>
                                        <!-- pricing text end -->
                                        <!-- pricing list start -->
                                        <div class="pricing-list">
                                            <p class="text-black">What's included?</p>
                                            <!-- check list start -->
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Routine Checkups</li>
                                                    <li>Medical Specialist</li>
                                                    <li>Nutritional Guidance</li>
                                                    <li>Professional Consultation</li>
                                                    <li>Online Booking</li>
                                                    <li>Emergency Care</li>
                                                </ul>
                                            </div>
                                            <!-- check list end -->
                                            <!-- pricing button wapper start -->
                                            <div class="pricing-button-wapper">
                                                <a href="pricing.html" class="theme-button style-2"
                                                    aria-label="Choose Plan">
                                                    <span data-text="Choose Plan">Choose Plan</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <!-- pricing button wapper end -->
                                        </div>
                                        <!-- pricing list end -->
                                    </div>
                                    <!-- pricing content end -->
                                </div>
                                <!-- pricing item end -->
                            </div>
                        </div>
                    </div>
                    <!-- tab pane end -->
                    <!-- tab pane start -->
                    <div class="tab-pane fade" id="nav-yearly" role="tabpanel" aria-labelledby="nav-yearly-tab"
                        tabindex="0">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-12">
                                <!-- pricing item start -->
                                <div class="pricing-item">
                                    <!-- pricing content start -->
                                    <div class="pricing-content">
                                        <!-- pricing text start -->
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Individual Plans</p>
                                            <h3 class="pricing-plan-price monthly_text">$310<span>/Yearly</span></h3>
                                            <p>This plan includes online consultation options for all users</p>
                                        </div>
                                        <!-- pricing text end -->
                                        <!-- pricing list start -->
                                        <div class="pricing-list">
                                            <p class="text-black">What's included?</p>
                                            <!-- check list start -->
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Routine Checkups</li>
                                                    <li>Medical Specialist</li>
                                                    <li>Nutritional Guidance</li>
                                                    <li>Professional Consultation</li>
                                                    <li>Online Booking</li>
                                                    <li>Emergency Care</li>
                                                </ul>
                                            </div>
                                            <!-- check list end -->
                                            <!-- pricing button wapper start -->
                                            <div class="pricing-button-wapper">
                                                <a href="pricing.html" class="theme-button style-2"
                                                    aria-label="Choose Plan">
                                                    <span data-text="Choose Plan">Choose Plan</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <!-- pricing button wapper end -->
                                        </div>
                                        <!-- pricing list end -->
                                    </div>
                                    <!-- pricing content end -->
                                </div>
                                <!-- pricing item end -->
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <!-- pricing item start -->
                                <div class="pricing-item tagged">
                                    <!-- pricing content start -->
                                    <div class="pricing-content">
                                        <!-- pricing text start -->
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">
                                                Family Plans
                                                <span>Popular</span>
                                            </p>
                                            <h3 class="pricing-plan-price monthly_text">$790<span>/Yearly</span></h3>
                                            <p class="text-white">This plan includes online consultation options for all
                                                users</p>
                                        </div>
                                        <!-- pricing text end -->
                                        <!-- pricing list start -->
                                        <div class="pricing-list">
                                            <p class="text-white">What's included?</p>
                                            <!-- check list start -->
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Routine Checkups</li>
                                                    <li>Medical Specialist</li>
                                                    <li>Nutritional Guidance</li>
                                                    <li>Professional Consultation</li>
                                                    <li>Online Booking</li>
                                                    <li>Emergency Care</li>
                                                </ul>
                                            </div>
                                            <!-- check list end -->
                                            <!-- pricing button wapper start -->
                                            <div class="pricing-button-wapper">
                                                <a href="pricing.html" class="theme-button style-4"
                                                    aria-label="Choose Plan">
                                                    <span data-text="Choose Plan">Choose Plan</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <!-- pricing button wapper end -->
                                        </div>
                                        <!-- pricing list end -->
                                    </div>
                                    <!-- pricing content end -->
                                </div>
                                <!-- pricing item end -->
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <!-- pricing item start -->
                                <div class="pricing-item">
                                    <!-- pricing content start -->
                                    <div class="pricing-content">
                                        <!-- pricing text start -->
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Group Plans</p>
                                            <h3 class="pricing-plan-price monthly_text">$1030<span>/Yearly</span></h3>
                                            <p>This plan includes online consultation options for all users</p>
                                        </div>
                                        <!-- pricing text end -->
                                        <!-- pricing list start -->
                                        <div class="pricing-list">
                                            <p class="text-black">What's included?</p>
                                            <!-- check list start -->
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Routine Checkups</li>
                                                    <li>Medical Specialist</li>
                                                    <li>Nutritional Guidance</li>
                                                    <li>Professional Consultation</li>
                                                    <li>Online Booking</li>
                                                    <li>Emergency Care</li>
                                                </ul>
                                            </div>
                                            <!-- check list end -->
                                            <!-- pricing button wapper start -->
                                            <div class="pricing-button-wapper">
                                                <a href="pricing.html" class="theme-button style-2"
                                                    aria-label="Choose Plan">
                                                    <span data-text="Choose Plan">Choose Plan</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <!-- pricing button wapper end -->
                                        </div>
                                        <!-- pricing list end -->
                                    </div>
                                    <!-- pricing content end -->
                                </div>
                                <!-- pricing item end -->
                            </div>
                        </div>
                    </div>
                    <!-- tab pane end -->
                </div>
                <!-- tab content end -->
            </div>
        </section>
        <!-- pricing section end -->
        <!-- appointment section start -->
        @include("website.components.cta")
        <!-- appointment section end -->

        <!-- portfolio section end -->





        <!-- cta section start -->
        {{-- <section class="cta-section-1 pt-100 md-pt-80 pb-100 md-pb-80">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="cta-content wow fadeInUp" data-wow-delay=".2s">
                            <!-- section title start -->
                            <div class="section-title">
                                <span class="sub-title">Get In Touch</span>
                                <h2>Best eye care &amp; health clinic near your city</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.</p>
                            </div>
                            <!-- section title end -->
                            <!-- cta button wapper start -->
                            <div class="cta-button-wapper">
                                <a href="appointment.html" class="theme-button style-4" aria-label="Get Appointment">
                                    <span data-text="Get Appointment">Get Appointment</span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </a>
                                <a href="contact.html" class="theme-button style-5" aria-label="Explore More">
                                    <span data-text="Explore More">Explore More</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <!-- cta button wapper end -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- cta video wapper start -->
                        <div class="cta-video-wapper wow fadeInUp" data-wow-delay=".2s">
                            <a class="video-popup video-play play-center" href="https://www.youtube.com/watch?v=Y-x0efG1seA"
                                aria-label="play video">
                                <span class="icon"><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                        <!-- cta video wapper end -->
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- cta section end -->



        




        <!-- testimonials section start -->
        <section class="testimonials-section-1 background-one pt-100 md-pt-80 pb-100 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <!-- testimonials image start -->
                        <div class="testimonials-image wow fadeInLeft" data-wow-delay=".2s">
                            <figure>
                                <img src="assets/images/testimonials/testimonial-1-1.jpg" alt="testimonials image one">
                            </figure>
                            <div class="success-rate">
                                <div class="success-rate-review">2K+ Review</div>
                                <div class="success-rate-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials image end -->
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="testimonials-wapper">
                            <!-- section title start -->
                            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">Our Testimonials</span>
                                <h2>What our patient think about services</h2>
                            </div>
                            <!-- section title end -->
                            <!-- testimonials slider start -->
                            <div class="swiper testimonials-slider">
                                <!-- swiper wrapper start -->
                                <div class="swiper-wrapper">
                                    <!-- swiper slide start -->
                                    <div class="swiper-slide">
                                        <!-- testimonials item start -->
                                        <div class="testimonials-item">
                                            <div class="testimonials-meta">
                                                <div class="testimonials-rating">
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                </div>
                                                <div class="testimonials-quote">
                                                    <figure>
                                                        <img src="assets/images/testimonials/quote.png" alt="quote">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="testimonials-content">
                                                <p>"Doctean is the best medical in the world I have great experience with
                                                    them the provide authentic results & have the best environment the
                                                    inside here. I can't express enough gratitude for the exceptional care
                                                    experienced at doctean kudos to the remarkable team for press support!,
                                                    I highly recommend them."</p>
                                            </div>
                                            <div class="testimonials-author">
                                                <div class="testimonials-author-image">
                                                    <figure>
                                                        <img src="assets/images/avatar/avatar-1.jpg" alt="avatar one">
                                                    </figure>
                                                </div>
                                                <div class="testimonials-author-content">
                                                    <h3>Charlotte Walker</h3>
                                                    <p>Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- testimonials item end -->
                                    </div>
                                    <!-- swiper slide end -->
                                    <!-- swiper slide start -->
                                    <div class="swiper-slide">
                                        <!-- testimonials item start -->
                                        <div class="testimonials-item">
                                            <div class="testimonials-meta">
                                                <div class="testimonials-rating">
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                </div>
                                                <div class="testimonials-quote">
                                                    <figure>
                                                        <img src="assets/images/testimonials/quote.png" alt="quote">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="testimonials-content">
                                                <p>"Doctean is the best medical in the world I have great experience with
                                                    them the provide authentic results & have the best environment the
                                                    inside here. I can't express enough gratitude for the exceptional care
                                                    experienced at doctean kudos to the remarkable team for press support!,
                                                    I highly recommend them."</p>
                                            </div>
                                            <div class="testimonials-author">
                                                <div class="testimonials-author-image">
                                                    <figure>
                                                        <img src="assets/images/avatar/avatar-2.jpg" alt="avatar two">
                                                    </figure>
                                                </div>
                                                <div class="testimonials-author-content">
                                                    <h3>James Martin</h3>
                                                    <p>CO Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- testimonials item end -->
                                    </div>
                                    <!-- swiper slide end -->
                                    <!-- swiper slide start -->
                                    <div class="swiper-slide">
                                        <!-- testimonials item start -->
                                        <div class="testimonials-item">
                                            <div class="testimonials-meta">
                                                <div class="testimonials-rating">
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                </div>
                                                <div class="testimonials-quote">
                                                    <figure>
                                                        <img src="assets/images/testimonials/quote.png" alt="quote">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="testimonials-content">
                                                <p>"Doctean is the best medical in the world I have great experience with
                                                    them the provide authentic results & have the best environment the
                                                    inside here. I can't express enough gratitude for the exceptional care
                                                    experienced at doctean kudos to the remarkable team for press support!,
                                                    I highly recommend them."</p>
                                            </div>
                                            <div class="testimonials-author">
                                                <div class="testimonials-author-image">
                                                    <figure>
                                                        <img src="assets/images/avatar/avatar-3.jpg" alt="avatar three">
                                                    </figure>
                                                </div>
                                                <div class="testimonials-author-content">
                                                    <h3>Ava Lee</h3>
                                                    <p>Head of Operations</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- testimonials item end -->
                                    </div>
                                    <!-- swiper slide end -->
                                    <!-- swiper slide start -->
                                    <div class="swiper-slide">
                                        <!-- testimonials item start -->
                                        <div class="testimonials-item">
                                            <div class="testimonials-meta">
                                                <div class="testimonials-rating">
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                    <i class="fa-solid fa-star active"></i>
                                                </div>
                                                <div class="testimonials-quote">
                                                    <figure>
                                                        <img src="assets/images/testimonials/quote.png" alt="quote">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="testimonials-content">
                                                <p>"Doctean is the best medical in the world I have great experience with
                                                    them the provide authentic results & have the best environment the
                                                    inside here. I can't express enough gratitude for the exceptional care
                                                    experienced at doctean kudos to the remarkable team for press support!,
                                                    I highly recommend them."</p>
                                            </div>
                                            <div class="testimonials-author">
                                                <div class="testimonials-author-image">
                                                    <figure>
                                                        <img src="assets/images/avatar/avatar-4.jpg" alt="avatar four">
                                                    </figure>
                                                </div>
                                                <div class="testimonials-author-content">
                                                    <h3>Ethan Clark</h3>
                                                    <p>Chief Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- testimonials item end -->
                                    </div>
                                    <!-- swiper slide end -->
                                </div>
                                <!-- swiper wrapper end -->
                                <!-- swiper actions start -->
                                <div class="swiper-actions ms-2">
                                    <div class="dot"></div>
                                </div>
                                <!-- swiper actions end -->
                            </div>
                            <!-- testimonials slider end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection