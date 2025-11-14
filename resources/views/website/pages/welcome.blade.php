@extends("website.layout.master-layout")

@section("title", "Welcome To Diagnoedge Labs")

@section("content")
    <main class="main">
        <!-- hero section start -->
        {{-- <section class="hero-section-1" data-img-src="assets/images/hero/banner_bg.png">
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
                                <span class="sub-title">Welcome Diagnoedge</span>
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
                                <a href="{{ route(" appointment") }}" class="theme-button style-1"
                                    aria-label="Book Appointment">
                                    <span data-text="Book Appointment">Book Appointment</span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </a>
                                <a href="{{ route(" about-us") }}" class="theme-button style-2" aria-label="Our Services">
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
        </section> --}}
        <!-- hero section end -->
        <section class="banner-booknoow space-between sidespace">
            <div class=" d-lg-flex flex-lg-row custom-hero-section">
                <div class="col-xl-9 col-md-8 col-lg-8">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative"
                        data-bs-ride="carousel">
                        <div class="position-absolute top-0 end-0 m-3 d-flex gap-2 d-none d-md-block" style="z-index: 10;">
                            <button class="btn btn-light btn-sm hero-secslider" type="button"
                                data-bs-target="#carouselExampleFade" aria-label="Previous slide" data-bs-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="btn btn-light btn-sm hero-secslider" type="button"
                                data-bs-target="#carouselExampleFade" aria-label="Next slide" data-bs-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-3 d-flex gap-2 d-block d-md-none"
                            style="z-index: 10;">
                            <button class="btn btn-light btn-sm hero-secslider" type="button"
                                data-bs-target="#carouselExampleFade" aria-label="Previous slide" data-bs-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="btn btn-light btn-sm hero-secslider" type="button"
                                data-bs-target="#carouselExampleFade" aria-label="Next slide" data-bs-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="carousel-inner">


                            <div class="carousel-item">
                                <a href="" target="_blank">
                                    <img src="assets/images/breadcrumb/banner-diagno.png" class="d-none d-md-block w-100"
                                        style="border-radius: 15px;" alt="img1" width="1076" height="314">
                                    <img src="assets/images/breadcrumb/banner-diagno.png" class="d-block d-md-none w-100"
                                        alt="img1" width="393" height="393" fetchpriority="high">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="" target="_blank">
                                    <img src="assets/images/breadcrumb/banner-diagno.jpg" class="d-none d-md-block w-100"
                                        style="border-radius: 15px;" alt="img1" width="1076" height="314">
                                    <img src="assets/images/breadcrumb/banner-diagno.jpg" class="d-block d-md-none w-100"
                                        alt="img1" width="393" height="393" fetchpriority="high">
                                </a>
                            </div>
                            <div class="carousel-item active">
                                <a href="" target="_blank">
                                    <img src="assets/images/breadcrumb/banner-diagno.png" class="d-none d-md-block w-100"
                                        style="border-radius: 15px;" alt="img2" width="1076" height="314">
                                    <img src="assets/images/breadcrumb/banner-diagno.png" class="d-block d-md-none w-100"
                                        alt="img2" width="393" height="393" fetchpriority="high">
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-md-4 col-lg-4 " style="min-height:300px;">
                    <div class="book-online flex-center-col  shadow">
                        <h3 class="text-center mb-4">Book a Test Online</h3>
                        <div class="book-online-frist-row pb-2 ">
                            <p>If you Already Know What Test to Take</p>
                            <table class="book-input w-100">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/logo/test.svg" class="input-icon" alt="icon" width="35"
                                                height="25">
                                        </td>
                                        <td class="search-widget-input-wrapper">
                                            <input type="text" id="already_know" class="input-box"
                                                placeholder="Search and book" autocomplete="off">
                                            <div class="headerSearchResults already_know" style="display: none;">
                                                <div class="resultsHolder">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="book-online-second-row my-0 ">
                            <p>Find a Nearest Center</p>
                            <table class="book-input w-100">
                                <tbody>
                                    <tr style="padding-bottom:50px;">
                                        <td>
                                            <img class="input-icon" src="assets/images/logo/center.svg" alt="icon"
                                                width="35" height="25">
                                        </td>
                                        <td class="search-books search-widget-input-wrapper">
                                            <input type="text" placeholder="Enter Area" class="input-box" id="find_center2"
                                                autocomplete="off">

                                            <div class="headerSearchResults find_center" style="display: none;">
                                                <div class="resultsHolder">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- product section start -->
        <section class="product-section background-one pt-20  md-pt-50 pb-70 md-pb-50">
            <div class="container-fluid">
                {{-- section for test packages start--}}
                <div class="container pt-20">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title start -->
                            <h5 class="text-center pt-10 pb-10">Tru Health Packages</h5>
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

                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>

                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">

                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

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

                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

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

                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('health-package') }}">
                                                <h6 class="title-card mb-1">
                                                    Truehealth Vital with Body Vitals Check & More
                                                </h6>
                                            </a>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Swiper Container End -->
                    </div>
                </div>
            </div>

            {{-- section for test packages start FOR Popular Tests--}}
            <div class="container-fluid pt-40">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title start -->
                            <h5 class="text-center pt-10 pb-10">Popular Test Packages</h5>
                            <!-- section title end -->
                        </div>
                        <!-- pricing tabs start -->
                        <div class="pricing-tabs">
                            <!-- nav start -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link" id="nav-male-TP-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-male-TP" type="button" role="tab" aria-controls="nav-male-TP"
                                        aria-selected="false">For Male</button>
                                    <button class="nav-link active" id="nav-TP-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-TP" type="button" role="tab" aria-controls="nav-TP"
                                        aria-selected="true">Popular Test Packages</button>

                                    <button class="nav-link" id="nav-female-TP-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-female-TP" type="button" role="tab"
                                        aria-controls="nav-female-TP" aria-selected="false">For Female</button>
                                </div>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- pricing tabs end -->
                    </div>
                </div>
                <div class="tab-content">
                    {{-- active tab TP --}}
                    <div class="tab-pane fade active show" id="nav-TP" role="tabpanel" aria-labelledby="nav-TP-tab"
                        tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Swiper Container End -->

                    </div>
                    {{-- male tab TP --}}
                    <div class="tab-pane fade  show" id="nav-male-TP" role="tabpanel" aria-labelledby="nav-male-TP-tab"
                        tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Swiper Container End -->
                    </div>
                    {{-- female tab TP --}}
                    <div class="tab-pane fade  show" id="nav-female-TP" role="tabpanel" aria-labelledby="nav-female-TP-tab"
                        tabindex="0">
                        <!-- Swiper Container Start -->
                        <div class="swiper myProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test.jpg" class="img-fluid w-100"
                                                alt="Truehealth Vital Test">
                                            <span
                                                class="position-absolute top-0 end-0 m-2 bg-success text-white rounded-circle px-2 py-1 small fw-bold">
                                                0
                                            </span>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="title-card mb-1">
                                                Truehealth Vital with Body Vitals Check & More
                                            </h6>
                                            <p class="text-muted small mb-2">
                                                <span class="badge bg-light text-dark border">9 Profile | 81
                                                    Parameters</span>
                                            </p>
                                            <hr class="my-2">
                                            <p class="fw-semibold fs-6 mb-3">Rs.3500</p>
                                            <button class="btn btn-success w-100 fw-semibold rounded-3">
                                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Swiper Container End -->
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-40">
                <div class="row container">
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <h5 class="text-center pt-20 pb-30">Test by Health Risks</h5>

                        <!-- section title end -->
                    </div>

                    <div class=" row test-section services-section-1">
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-1.png">
                            </div>
                            <div class="title text-center">
                                Eye Test
                            </div>
                        </div>
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-1.png">
                            </div>
                            <div class="title text-center">
                                Eye Test
                            </div>
                        </div>
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-2.png">
                            </div>
                            <div class="title text-center">
                                Eye Test
                            </div>
                        </div>
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-3.png">
                            </div>
                            <div class="title text-center">
                                Eye Test
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </section>
        <!-- product section end -->
        <!-- about section start -->
        <section class="about-section-4 pt-70 md-pt-80 pb-100 md-pb-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <!-- section title start -->
                        <div class="section-title mb-20 wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title">About Us</span>
                            <h2>Precision. Care. Confidence — The Edge in Diagnostics.</h2>

                        </div>
                        <div class="about-img d-flex justify-content-center w-100">
                            <img src="assets/images/why-choose/why-choose-img-1-2.jpg">
                        </div>


                        <!-- section title end -->
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <!-- about content start -->
                        <div class="about-content wow fadeInUp" data-wow-delay=".3s">
                            <!-- about content text start -->
                            <div class="about-content-text">

                                <p align="justify">
                                    At Diagnoedge , we are committed to delivering accurate, reliable, and timely
                                    diagnostic results to help doctors and patients make informed health decisions. Our
                                    advanced laboratory is equipped with modern technology and managed by skilled
                                    professionals who ensure every test meets the highest standards of precision and care.
                                </p>
                                <p align="justify"></p>
                                We believe in combining innovation with compassion, offering a wide range of pathology,
                                radiology, and wellness services under one roof. Your health is our priority, and we
                                strive to provide you with seamless, trustworthy, and affordable diagnostic solutions.
                                </p>
                            </div>
                            <!-- about content text end -->
                            <!-- about features wappper start -->
                            <div class="about-features-wappper">
                                <div class="about-features-item">
                                    <div class="about-features-icon">
                                        <figure>
                                            <img src="assets/images/about/icon-about-1.png" alt="icon about one">
                                        </figure>
                                    </div>
                                    <div class="about-features-title">
                                        <h3>Advanced Technology, Accurate Results</h3>
                                        <p align="justify">Equipped with state-of-the-art analyzers and automated systems,
                                            DiagnoEdge ensures precise and reliable diagnostic outcomes every time.</p>
                                    </div>
                                </div>
                                <div class="about-features-item">
                                    <div class="about-features-icon">
                                        <figure>
                                            <img src="assets/images/about/icon-about-2.png" alt="icon about two">
                                        </figure>
                                    </div>
                                    <div class="about-features-title">
                                        <h3>Expert Team, Patient-Focused Care</h3>
                                        <p align="justify">Our team of qualified pathologists and technicians work with
                                            dedication and empathy to deliver results that support better health decisions
                                            and patient well-being.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- about features wappper end -->
                        </div>
                        <!-- about content end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->

        <!-- blog section start -->
        <section class="blog-section background-one pt-40 md-pt-80 pb-40 md-pb-50">
            <div class="container-fluid">
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


                            <div class="blog-grid-image">
                                <a href="{{ route("blog-details") }}">
                                    <figure class="image-anime">
                                        <img src="assets/images/blog/blog-1.jpg" alt="blog image one">
                                    </figure>
                                </a>
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
                            <div class="blog-title">
                                <h3><a href="{{ route("blog-details") }}">How do Inherited Retinal Diseases Happen?</a></h3>
                            </div>
                            <div class="blog-grid-content">
                                <p>It is a long established fact that a reader will be distracted ....</p>
                                <div class="blog-grid-button">
                                    <a href="{{ route("blog-details") }}" class="read-more-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog grid item 1 end -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- blog grid item 1 start -->
                        <div class="blog-grid-item-1 wow fadeInUp" data-wow-delay=".4s">


                            <div class="blog-grid-image">
                                <a href="{{ route("blog-details") }}">
                                    <figure class="image-anime">
                                        <img src="assets/images/blog/blog-2.jpg" alt="blog image two">
                                    </figure>
                                </a>
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
                            <div class="blog-title">
                                <h3><a href="{{ route("blog-details") }}">Protect your eyes from dust and disease</a></h3>
                            </div>
                            <div class="blog-grid-content">
                                <p>It is a long established fact that a reader will be distracted ...</p>
                                <div class="blog-grid-button">
                                    <a href="{{ route("blog-details") }}" class="read-more-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog grid item 1 end -->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- blog grid item 1 start -->
                        <div class="blog-grid-item-1 wow fadeInUp" data-wow-delay=".5s">


                            <div class="blog-grid-image">
                                <a href="{{ route("blog-details") }}">
                                    <figure class="image-anime">
                                        <img src="assets/images/blog/blog-3.jpg" alt="blog image three">
                                    </figure>
                                </a>
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
                            <div class="blog-title">
                                <h3><a href="{{ route("blog-details") }}">We're ready to enhance your clear vision</a></h3>
                            </div>
                            <div class="blog-grid-content">
                                <p>It is a long established fact that a reader will be distracted ....</p>
                                <div class="blog-grid-button">
                                    <a href="{{ route("blog-details") }}" class="read-more-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog grid item 1 end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section end -->
        <!-- micon section start -->
        {{-- <section class="micon-section pt-100 md-pt-80 pb-70 md-pb-50">
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
                                    <a href="{{ route(" appointment") }}" class="read-more-btn">Request an Appointment</a>
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
                                    <a href="{{ route(" doctors") }}" class="read-more-btn">View All Doctor</a>
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
                                    <a href="{{ route(" contact-us") }}" class="read-more-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!-- micon items end -->
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- micon section end -->




        <!-- product section start -->
        {{-- <section class="product-section background-one pt-100 md-pt-50 pb-70 md-pb-50">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Swiper Container End -->

                    </div>

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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Swiper Container End -->
                    </div>

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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Swiper Container End -->
                    </div>
                </div>
            </div>


            <div class="container-fluid pt-20">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Swiper Container End -->

                    </div>

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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Swiper Container End -->
                    </div>

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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">CM 4336 RG Luxury Stethoscope</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Adjustable blood pressure machine</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Oral Lamp with 8 LED Light Bulbs</a>
                                            </h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
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
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-bookmark"></i></a>
                                                <a href="{{ route(" contact-us") }}" class="icon-btn"><i
                                                        class="fa-solid fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-grid-content">
                                            <h2><a href="#">Zoom Microscope for Eye Surgery</a></h2>
                                            <ul class="product-price-list">
                                                <li class="price">$120.00</li>
                                                <li><i class="fas fa-star active"></i>4.9 (25)</li>
                                            </ul>
                                            <div class="product-buton-wapper">
                                                <a href="{{ route(" contact-us") }}" class="theme-button style-1">
                                                    <span data-text="Add To Cart">Add To Cart</span>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Swiper Container End -->
                    </div>
                </div>
            </div>

            </div>
        </section> --}}
        <!-- product section end -->

        <!-- why-section start -->
        {{-- <section class="why-choose-section-1 pt-100 md-pt-80 pb-100 md-pb-80">
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
                                <a class="about-circle" href="{{ route(" about-us") }}" aria-label="about circle">
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
        </section> --}}
        <!-- why-section end -->

        <!-- services section start -->
        {{-- <section class="services-section-1 background-one pt-100 md-pt-80 pb-100 md-pb-80"
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
                                            <h2><a href="#">Cataract evaluation</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="#" class="read-more-btn">More Details</a>
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
                                            <h2><a href="#">Contact lens fitting</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="#" class="read-more-btn">More Details</a>
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
                                            <h2><a href="#">Dry eye treatment</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="#" class="read-more-btn">More Details</a>
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
                                            <h2><a href="#">Pediatric eye care</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="#" class="read-more-btn">More Details</a>
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
                                            <h2><a href="#">Glaucoma surgery</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="#" class="read-more-btn">More Details</a>
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
                                            <h2><a href="#">Glaucoma &amp; cornea</a></h2>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout</p>
                                            <a href="#" class="read-more-btn">More Details</a>
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
        </section> --}}
        <!-- services section end -->

        <!-- portfolio section start -->
        <section class="portfolio-section-1 pt-40 md-pt-80 pb-40 md-pb-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title area start -->
                        <div class="section-title-area">
                            <div class="section-title wow fadeInLeft" data-wow-delay=".2s">
                                <span class="sub-title">Our Gallery</span>
                                <h2>Explore our showcase of featured works</h2>
                            </div>
                            <div class="section-title-content wow fadeInRight" data-wow-delay=".2s">
                                <p align="justify">Step inside DiagnoEdge Lab through our gallery. From advanced testing
                                    equipment and
                                    hygienic sample collection areas to our expert team at work — every image reflects our
                                    commitment to precision, care, and excellence in diagnostics.</p>
                            </div>
                        </div>
                        <!-- section title area end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <!-- portfolio items start -->
                        <div class="portfolio-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="portfolio-image">
                                <figure>
                                    <img src="assets/images/portfolio/portfolio-1-1.jpg" alt="portfolio image one">
                                </figure>
                            </div>
                            <div class="portfolio-content">
                                {{-- <div class="portfolio-title">
                                    <h3><a href="#">Transitions Lenses</a></h3>
                                    <ul class="portfolio-meta">
                                        <li>Laser Eye Surgery</li>
                                        <li>Retina Checkup</li>
                                    </ul>
                                </div> --}}
                                <div class="portfolio-button-wapper">
                                    <a href="#" class="portfolio-button-icon" aria-label="portfolio button icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio items end -->
                    </div>
                    <div class="col-lg-3">
                        <!-- portfolio items start -->
                        <div class="portfolio-items wow fadeInUp" data-wow-delay=".4s">
                            <div class="portfolio-image">
                                <figure>
                                    <img src="assets/images/portfolio/portfolio-1-2.jpg" alt="portfolio image two">
                                </figure>
                            </div>
                            <div class="portfolio-content">

                                <div class="portfolio-button-wapper">
                                    <a href="#" class="portfolio-button-icon" aria-label="portfolio button icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio items end -->
                    </div>
                    <div class="col-lg-3">
                        <!-- portfolio items start -->
                        <div class="portfolio-items wow fadeInUp" data-wow-delay=".5s">
                            <div class="portfolio-image">
                                <figure>
                                    <img src="assets/images/portfolio/portfolio-1-3.jpg" alt="portfolio image three">
                                </figure>
                            </div>
                            <div class="portfolio-content">

                                <div class="portfolio-button-wapper">
                                    <a href="#" class="portfolio-button-icon" aria-label="portfolio button icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio items end -->
                    </div>
                    <div class="col-lg-3">
                        <!-- portfolio items start -->
                        <div class="portfolio-items wow fadeInUp" data-wow-delay=".6s">
                            <div class="portfolio-image">
                                <figure>
                                    <img src="assets/images/portfolio/portfolio-1-4.jpg" alt="portfolio image four">
                                </figure>
                            </div>
                            <div class="portfolio-content">

                                <div class="portfolio-button-wapper">
                                    <a href="#" class="portfolio-button-icon" aria-label="portfolio button icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio items end -->
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <!-- more portfolio content start -->
                        <div class="more-portfolio-content wow fadeInUp" data-wow-delay=".7s">
                            <p>From preventive care to specialized treatments, our wide range of services is designed to
                                support your health at every stage.</p>
                            <!-- portfolio button wappper start -->
                            <div class="service-button-wappper">
                                <a href="#" class="theme-button style-1" aria-label="View All Portfolio">
                                    <span data-text="View All Portfolio">View All Portfolio</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <!-- portfolio button wappper end -->
                        </div>
                        <!-- more portfolio content end -->
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- portfolio section end -->

        <!-- marquee ticker section start -->
        @include("website.components.sticker")
        <!-- marquee ticker section end -->
        <!-- faq section start -->
        <section class="faq-section-1 pt-70 md-pt-80">
            <div class="container">
                <!-- faq wapper start -->
                <div class="faq-wapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- section title start -->
                            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">Faq's</span>
                                <h2>Clear answers to your questions</h2>
                                <p align="justify"> At DiagnoEdge Lab, we understand that health testing can raise many
                                    questions — from
                                    booking appointments to understanding your reports.</p>
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


        <!-- appointment section start -->
        @include("website.components.cta")
        <!-- appointment section end -->

        <!-- portfolio section end -->














        <!-- testimonials section start -->
        @include("website.components.testimonials")
       
        

    </main>
@endsection