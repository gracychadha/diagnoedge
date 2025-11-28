@extends("website.layout.master-layout")

@section("title", "Welcome To Diagnoedge Labs")

@section("content")
    <main class="main">
        {{-- resources/views/components/booking-modal.blade.php --}}
        @props([])
        <!-- Styles -->
        <style>
            /* Modal Outer */
            .modal {
                display: none;
                position: fixed;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background: rgba(0, 0, 0, 0.6);
            }

            /* Modal Content */
            .modal-content-custom {
                background: #fff;
                width: 60%;
                max-width: 850px;
                margin: 80px auto;
                display: flex;
                flex-direction: row;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }

            .modal-left {
                width: 40%;
                background-size: cover;
                background-position: center;
                min-height: 400px;
            }

            .modal-right {
                width: 60%;
                padding: 25px 20px;
                background: #fff;
            }

            .iti--separate-dial-code .iti__selected-dial-code {
                margin-left: 0px !important;
            }

            .close {
                float: right;
                font-size: 30px;
                cursor: pointer;
                color: #666;
                line-height: 1;
            }

            .close:hover {
                color: #000;
            }

            .popupicon {
                position: absolute;
                top: 50%;
                left: 10px;
                transform: translateY(-50%);
                color: #666;
                font-size: 15px;
                z-index: 2;
            }

            .popup-call-btn {
                background: #54ad4c;
                color: white;
                padding: 5px;
                border-radius: 10px;
            }

            .popup-call-btn:hover {
                background: black;
            }

            /* intl-tel-input styling */
            .iti {
                width: 100% !important;
            }

            .iti__flag-container {
                left: 10px !important;
                top: 50% !important;
                transform: translateY(-50%) !important;
            }

            .iti__selected-flag {
                background: transparent !important;
            }

            .iti__flag {
                transform: scale(1.2);
            }

            .iti__country-list {
                z-index: 9999 !important;
            }

            .theme-button:hover:not(:disabled) {
                background: black;
            }

            .theme-button:disabled {
                background: #6c757d;
                cursor: not-allowed;
            }

            #bookingSubmit:disabled a {
                background: #6c757d;
                cursor: not-allowed;
            }

            .alert-success {
                padding: 10px;
                background: #e6ffef;
                border: 1px solid #c7f0d4;
                margin-bottom: 15px;
                border-radius: 6px;
                color: #0f5132;
            }

            .alert-error {
                padding: 10px;
                background: #ffecec;
                border: 1px solid #f5c2c2;
                margin-bottom: 15px;
                border-radius: 6px;
                color: #a94442;
            }

            .alert-error ul {
                margin: 0;
                padding-left: 18px;
            }

            @media (max-width: 768px) {
                .modal-content-custom {
                    flex-direction: column;
                    width: 90%;
                    margin: 40px auto;
                }

                .modal-left {
                    width: 100%;
                    height: 200px;
                    display: none;
                }

                .modal-right {
                    width: 100%;
                    padding: 20px 15px;
                }
            }
        </style>



        <!-- Modal HTML -->
        <div id="bookingModal" class="modal" aria-hidden="true">
            <div class="modal-content modal-content-custom" role="dialog" aria-modal="true" aria-labelledby="bookingTitle">
                <div class="modal-left" style="background-image:url('{{ asset('images/popup.jpg') }}');"></div>

                <div class="modal-right">
                    <div class="modal-header d-flex justify-content-between align-items-center" style="padding:8px 0;">
                        <h5 id="bookingTitle" style="margin: 0; color: #333; font-weight: 700;">Looking to Book a Test?</h5>
                        <span class="close" id="bookingClose">&times;</span>
                    </div>

                    <div class="modal-body p-0">
                        <p style="color: #666; margin-bottom: 10px; font-size: 14px;">
                            Please share your details — our health advisor will call you or you can call us at
                            <span class="popup-call-btn"><a href="tel:+919876784545" target="_blank">+91 987 678
                                    4545</a></span>
                        </p>

                        <div id="alertBox"></div>

                        <form id="bookingForm" method="POST" action="{{ route('book.test') }}">
                            @csrf

                            <div class="form-group position-relative ">
                                <span class="popupicon"><i class="fa fa-user"></i></span>
                                <input class="form-control" style="padding-left: 45px;" type="text" id="name" name="name"
                                    placeholder="Enter Name" required>
                            </div>

                            <div class="form-group position-relative ">

                                <input class="form-control " style="padding-left : 55px !important;" type="tel" id="mobile"
                                    name="mobile" placeholder="Enter Mobile No." required>
                            </div>


                            <input type="hidden" name="source" value="modal_homepage">

                            <div class="form-group ">
                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                                    data-callback="recaptchaCallback"></div>
                            </div>
                            <button type="submit" id="bookingSubmit" class="w-100" disabled>
                                <a href="" class="theme-button style-1 w-100" aria-label="Submit">
                                    <span data-text="Submit">Submit</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>





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
                                    Experience healthcare you can rely on. Our compassionate and skilled team is
                                    committed
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
            <div class="container-fluid">
                <div class="row gy-4 align-items-stretch">

                    <!-- LEFT: CAROUSEL -->
                    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                        <div id="carouselExampleFade "
                            class="carousel slide carousel-fade rounded-4 overflow-hidden shadow-lg" data-bs-ride="carousel"
                            data-bs-interval="5000">

                            <!-- Controls -->
                            <div class="position-absolute top-0 end-0 d-flex gap-2 m-3" style="z-index: 10;">
                                <button class="btn btn-outline-light btn-lg" data-bs-target="#carouselExampleFade"
                                    data-bs-slide="prev"><i class="fa fa-chevron-left"></i></button>
                                <button class="btn btn-outline-light btn-lg" data-bs-target="#carouselExampleFade"
                                    data-bs-slide="next"><i class="fa fa-chevron-right"></i></button>
                            </div>

                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                                    class="active"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></button>
                            </div>

                            <!-- Slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/breadcrumb/banner-diagno.png" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/breadcrumb/banner-diagno.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/breadcrumb/banner-diagno.png" class="d-block w-100" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- RIGHT: CARD -->
                    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="card p-4 shadow-lg border-0 rounded-4 h-100">
                            <h3 class="text-center mb-3 fw-bold text-success">Book a Test Online</h3>

                            <div class="mb-2">
                                <p class=" mb-2">If you Already Know What Test to Take</p>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 d-flex align-items-center">
                                        <img src="assets/images/logo/test.svg" alt="icon" width="35" height="25">
                                        <span class="vr ms-2"></span>
                                    </span>
                                    <input type="text" id="already_know" class="form-control  border-start-0"
                                        placeholder="Search and book" autocomplete="off">
                                </div>
                            </div>

                            <div class="mb-2">
                                <p class=" mb-2">Find a Nearest Center</p>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 d-flex align-items-center">
                                        <img src="assets/images/logo/center.svg" alt="icon" width="35" height="25">
                                        <span class="vr ms-2"></span>
                                    </span>
                                    <input type="text" placeholder="Enter Area" class="form-control  border-start-0"
                                        id="find_center2" autocomplete="off">
                                </div>
                            </div>

                            <div class="text-center mt-2">
                                <small class="fw-bold text-success"><i class="fa fa-clock"></i> Get reports in 24–48
                                    hours</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>





        <!-- product section start -->
        <section class="product-section background-one pt-50  md-pt-50 pb-50 md-pb-50">
            <div class="container">
                {{-- section for test packages start--}}
                <div class="container ">
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
                        <div class="swiper myProductSwiper pb-20">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class=" lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>

                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
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
                        <div class="swiper myProductSwiper pb-20">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class=" lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
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
                        <div class="swiper myProductSwiper pb-20">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class=" lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
                                        <div class="position-relative">
                                            <img src="assets/images/product/test1.jpg" class="img-fluid w-100"
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
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
            <div class="container pt-30">
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
                        <div class="swiper myProductSwiper pb-20">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
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
                        <div class="swiper myProductSwiper pb-20">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
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
                        <div class="swiper myProductSwiper pb-20">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lab-test-card shadow border-0 rounded-4 overflow-hidden bg-white">
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
                                            <a href="{{ route('appointment') }}" class="theme-button style-1"
                                                aria-label="Add to Cart">
                                                <span data-text="Add to Cart">Add to Cart</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Swiper Container End -->
                    </div>
                </div>
            </div>
            <div class="container pt-30">
                <div class="row container">
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <h5 class="text-center pt-20 pb-30">Test by Health Risks</h5>

                        <!-- section title end -->
                    </div>

                    <div class=" row test-section services-section-1 justify-content-center">
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-1.png">
                            </div>
                            <div class="title text-center">
                                Heart Test
                            </div>
                        </div>
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-1.png">
                            </div>
                            <div class="title text-center">
                                Kidney Test
                            </div>
                        </div>
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-2.png">
                            </div>
                            <div class="title text-center">
                                Thyroid Test
                            </div>
                        </div>
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-3.png">
                            </div>
                            <div class="title text-center">
                                Lungs Test
                            </div>
                        </div>
                        <div class="col-lg-2 test-card shadow ">
                            <div class="test-card-img">
                                <img src="assets/images/services/icon-service-3.png">
                            </div>
                            <div class="title text-center">
                                Bone Test
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </section>
        <!-- product section end -->
        <!-- about section start -->
        <section class="about-section-4 pt-50 md-pt-80 pb-50 md-pb-80">
            <div class="container">
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


        <!-- marquee ticker section start -->
        @include("website.components.sticker")
        <!-- marquee ticker section end -->


        <!-- faq section start -->
        <section class="faq-section-1 mb-5 pt-50 md-pt-80">
            <div class="container">
                <!-- faq wapper start -->
                <div class="faq-wapper py-5">
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

        <section class="portfolio-section-1 py-5" style="background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Left Content -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title">Why Choose Us?</span>
                            <h2>Why DiagnoEdge Labs?</h2>

                            <p class="lead">
                                DiagnoEdge Labs has been a trusted name in diagnostics for over a decade.
                            </p>

                            <p class="mb-3 lh-lg">
                                Our team consists of highly trained <strong>certified pathologists</strong> and
                                <strong>experienced laboratory professionals</strong> who ensure precision, safety, and
                                reliability in every report.
                                We specialize in advanced diagnostics including <strong>Oncology, Cardiology, Endocrinology,
                                    Microbiology, and Preventive Health</strong>.
                            </p>

                            <p class="lh-lg">
                                With cutting-edge technology and a commitment to accuracy, DiagnoEdge Labs provides
                                <strong>comprehensive diagnostic solutions</strong> designed for early detection, precise
                                monitoring, and effective treatment planning.
                            </p>
                        </div>
                    </div>

                    <!-- Right Side - Cards -->
                    <div class="col-lg-6">
                        <div class="row g-4 align-items-center">

                            <!-- Big Experience Card -->
                            <div class="col-12 col-md-5">
                                <div class="text-center p-5 rounded-4 shadow-lg h-100 d-flex flex-column justify-content-center"
                                    style="background: #ffffff; border: 4px solid #54ad4c; min-height: 280px;">
                                    <i class="fas fa-award mb-3" style="font-size: 4.5rem; color: #54ad4c;"></i>
                                    <h3 class="fw-bold mb-0" style="color: #1c5a80; font-size: 4.5rem; line-height: 1;">10+
                                    </h3>
                                    <p class="text-muted fw-medium mt-2 fs-5">Years of Excellence</p>
                                </div>
                            </div>

                            <!-- 4 Small Cards -->
                            <div class="col-12 col-md-7">
                                <div class="row g-3 g-md-4">

                                    <!-- Card 1 -->
                                    <div class="col-6">
                                        <div class="text-center p-4 rounded-4 shadow h-100 d-flex flex-column justify-content-center"
                                            style="background: #ffffff; border-top: 6px solid #54ad4c; min-height: 130px;">
                                            <i class="fas fa-flask mb-3" style="font-size: 2.4rem; color: #54ad4c;"></i>
                                            <h5 class="fw-bold mb-0" style="color: #1c5a80; font-size: 1.05rem;">50+
                                                Advanced Tests</h5>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col-6">
                                        <div class="text-center p-4 rounded-4 shadow h-100 d-flex flex-column justify-content-center"
                                            style="background: #ffffff; border-top: 6px solid #54ad4c; min-height: 130px;">
                                            <i class="fas fa-hospital mb-3" style="font-size: 2.4rem; color: #54ad4c;"></i>
                                            <h5 class="fw-bold mb-0" style="color: #1c5a80; font-size: 1.05rem;">Trusted by
                                                Clinics & Hospitals</h5>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="col-6">
                                        <div class="text-center p-4 rounded-4 shadow h-100 d-flex flex-column justify-content-center"
                                            style="background: #ffffff; border-top: 6px solid #54ad4c; min-height: 130px;">
                                            <i class="fas fa-user-md mb-3" style="font-size: 2.4rem; color: #54ad4c;"></i>
                                            <h5 class="fw-bold mb-0" style="color: #1c5a80; font-size: 1.05rem;">Skilled
                                                Diagnostic Experts</h5>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div class="col-6">
                                        <div class="text-center p-4 rounded-4 shadow h-100 d-flex flex-column justify-content-center"
                                            style="background: #ffffff; border-top: 6px solid #54ad4c; min-height: 130px;">
                                            <i class="fas fa-clipboard-check mb-3"
                                                style="font-size: 2.4rem; color: #54ad4c;"></i>
                                            <h5 class="fw-bold mb-0" style="color: #1c5a80; font-size: 1.05rem;">High
                                                Accuracy & Reliability</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- portfolio section start -->
        <section class="portfolio-section-1 pt-50 md-pt-80 pb-50 md-pb-80">
            <div class="container">
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



        <section class="accredit-sec py-5" style="background:#e6f5e9;">
            <div class="container">

                <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                    <span class="sub-title">Accreditations & Certifications</span>
                    <h2>Why Trust Our Quality Standards?</h2>
                    <p class="lead">We follow globally recognized testing standards ensuring precision, safety, and
                        accuracy.</p>
                </div>

                <div class="row g-4 justify-content-center">



                    <!-- NABL Accredited -->
                    <div class="col-md-4 col-lg-3">
                        <div class="feature-card text-center p-4">
                            <i class="fas fa-award mb-3" style="font-size: 4.5rem; color: #54ad4c;"></i>
                            <h6 class="fw-bold">NABL Accredited Labs</h6>
                        </div>
                    </div>

                    <!-- CAP Certified -->
                    <div class="col-md-4 col-lg-3">
                        <div class="feature-card text-center p-4">
                            <i class="fas fa-microscope mb-3" style="font-size: 4.5rem; color: #54ad4c;"></i>
                            <h6 class="fw-bold">CAP Certified</h6>
                        </div>
                    </div>

                    <!-- ISO Certification -->
                    <div class="col-md-4 col-lg-3">
                        <div class="feature-card text-center p-4">
                            <i class="fas fa-clipboard-check mb-3" style="font-size: 4.5rem; color: #54ad4c;"></i>
                            <h6 class="fw-bold">ISO 9001:2015</h6>
                        </div>
                    </div>

                    <!-- Daily QC Monitoring -->
                    <div class="col-md-4 col-lg-3">
                        <div class="feature-card text-center p-4">
                            <i class="fas fa-chart-line mb-3" style="font-size: 4.5rem; color: #54ad4c;"></i>
                            <h6 class="fw-bold">600+ Instruments<br>Real-Time QC Monitoring</h6>
                        </div>
                    </div>



                </div>

            </div>
        </section>


        <!-- blog section start -->
        <section class="blog-section background-one pt-50 md-pt-80 pb-50 md-pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title">Blog &amp; Article</span>
                            <h2>Update with our latest insights</h2>
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
                                <h3><a href="{{ route("blog-details") }}">How do Inherited Retinal Diseases Happen?</a>
                                </h3>
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
        <!-- testimonials section start -->
        @include("website.components.testimonials")

    </main>


@endsection