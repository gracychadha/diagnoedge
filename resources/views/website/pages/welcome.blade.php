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
                                data-callback="popupCaptcha"></div>
                        </div>
                        <button type="submit" id="bookingSubmit" class="theme-button style-1 w-100" disabled>
                            <span data-text="Submit">Submit</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>


                    </form>
                </div>
            </div>
        </div>
    </div>







    <!-- hero section end -->
    <section class="banner-booknoow space-between sidespace">
        <div class="container-fluid">
            <div class="row gy-4 align-items-stretch">

                <!-- LEFT: CAROUSEL -->
                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                    <div id="carouselExampleFade"
                        class="carousel slide carousel-fade rounded-4 overflow-hidden shadow-lg" data-bs-ride="carousel"
                        data-bs-interval="5000">

                        <!-- Controls -->
                        <div class="position-absolute top-0 end-0 d-flex gap-2 m-3" style="z-index: 10;">
                            <button class=" slider-prev btn btn-outline-light btn-lg"
                                data-bs-target="#carouselExampleFade" data-bs-slide="prev"><i
                                    class="fa fa-chevron-left"></i></button>
                            <button class="slider-prev btn btn-outline-light btn-lg"
                                data-bs-target="#carouselExampleFade" data-bs-slide="next"><i
                                    class="fa fa-chevron-right"></i></button>
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
                                <img src="assets/images/lab/banner-1.png" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/lab/banner-2.png" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/lab/banner-3.png" class="d-block w-100" alt="">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT: CARD -->
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="card p-2 shadow-lg border-0 rounded-4 h-100 align-items-center justify-content-center">
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
    <section class="product-section background-one pt-50  md-pt-30 pb-50 md-pb-30">
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
                    <div class="swiper myProductSwiper pb-20 p-sm-10">
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
        <div class="container pt-30 md-pt-10">
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
        <div class="container pt-30 md-pt-10">
            <div class=" container">
                <div class="col-lg-12">
                    <!-- section title start -->
                    <h5 class="text-center  pb-30 md-pb-10">Test by Health Risks</h5>

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
    @php
        $aboutSection = \App\Models\AboutSection::where('is_active', true)->first();
    @endphp

    @if($aboutSection)
    <section class="about-section-4 pt-50 md-pt-30 pb-50 md-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <!-- section title start -->
                    <div class="section-title mb-20 wow fadeInUp" data-wow-delay=".2s">
                        <span class="sub-title">{{ $aboutSection->sub_title }}</span>
                        <h2>{{ $aboutSection->main_title }}</h2>
                    </div>
                    <div class="about-img d-flex justify-content-center w-100">
                        @if($aboutSection->image)
                            <img src="{{ asset('storage/' . $aboutSection->image) }}" alt="About Us" class="img-fluid">
                        @else
                            <img src="{{ asset('assets/images/why-choose/why-choose-img-1-2.jpg') }}" alt="About Us"
                                class="img-fluid">
                        @endif
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <!-- about content start -->
                    <div class="about-content wow fadeInUp" data-wow-delay=".3s">
                        <!-- about content text start -->
                        <div class="about-content-text">
                            <p align="justify">{!! nl2br(e($aboutSection->description_1)) !!}</p>
                            @if($aboutSection->description_2)
                                <p align="justify">{!! nl2br(e($aboutSection->description_2)) !!}</p>
                            @endif
                        </div>
                        <!-- about features wrapper start -->
                        <div class="about-features-wappper">
                            <div class="about-features-item">
                                <div class="about-features-icon">
                                    <figure>
                                        @if($aboutSection->icon_1)
                                            <img src="{{ asset('storage/' . $aboutSection->icon_1) }}"
                                                alt="{{ $aboutSection->feature_1_title }}">
                                        @else
                                            <img src="{{ asset('assets/images/about/icon-about-1.png') }}"
                                                alt="{{ $aboutSection->feature_1_title }}">
                                        @endif
                                    </figure>
                                </div>
                                <div class="about-features-title">
                                    <h3>{{ $aboutSection->feature_1_title }}</h3>
                                    <p align="justify">{!! nl2br(e($aboutSection->feature_1_description)) !!}</p>
                                </div>
                            </div>
                            <div class="about-features-item">
                                <div class="about-features-icon">
                                    <figure>
                                        @if($aboutSection->icon_2)
                                            <img src="{{ asset('storage/' . $aboutSection->icon_2) }}"
                                                alt="{{ $aboutSection->feature_2_title }}">
                                        @else
                                            <img src="{{ asset('assets/images/about/icon-about-2.png') }}"
                                                alt="{{ $aboutSection->feature_2_title }}">
                                        @endif
                                    </figure>
                                </div>
                                <div class="about-features-title">
                                    <h3>{{ $aboutSection->feature_2_title }}</h3>
                                    <p align="justify">{!! nl2br(e($aboutSection->feature_2_description)) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @empty
    <div class="text-center w-100 py-5">
        <h4>No about content to show</h4>
    </div>

    @endif
    <!-- about section end -->


    <!-- marquee ticker section start -->
    @include("website.components.sticker")
    <!-- marquee ticker section end -->

    @php
        $faqs = \App\Models\Faq::where('status', 'active')->get();
    @endphp
    <!-- faq section start -->
    <section class="faq-section-1 mb-5 pt-50 md-pt-30">
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
                                @forelse($faqs as $faq)
                                    @php
                                        $id = 'faq_' . $loop->index;
                                    @endphp
                                    <div class="accordion-item">
                                        <!-- accordion-header start -->
                                        <h2 class="accordion-header" id="heading_{{ $id }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse_{{ $id }}" aria-expanded="true"
                                                aria-controls="collapse_{{ $id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <!-- accordion header end -->
                                        <!-- accordion collapse start -->
                                        <div id="collapse_{{ $id }}"
                                            class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                            aria-labelledby="heading_{{ $id }}" data-bs-parent="#accordionExample">
                                            <!-- accordion body start -->
                                            <div class="accordion-body">
                                                <div class="inner">
                                                    <div class="accordion-content">
                                                        <p>
                                                            {{ strip_tags($faq->answer) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- accordion body end -->
                                        </div>
                                        <!-- accordion collapse end -->
                                    </div>
                                @empty
                                    <div class="accordion-item">
                                        <!-- accordion-header start -->
                                        <h2 class="accordion-header" id="">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse_" aria-expanded="true" aria-controls="collapse_">
                                                How do you ensure the accuracy of your test results?
                                            </button>
                                        </h2>
                                        <!-- accordion header end -->
                                        <!-- accordion collapse start -->
                                        <div id="collapse_"
                                            class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                            aria-labelledby="heading_" data-bs-parent="#accordionExample">
                                            <!-- accordion body start -->
                                            <div class="accordion-body">
                                                <div class="inner">
                                                    <div class="accordion-content">
                                                        <p>
                                                            Healthcare ensures the accuracy of test results through a
                                                            stringent quality control process that includes regular
                                                            calibration of equipment, external and internal quality checks,
                                                            and adherence to international standards.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- accordion body end -->
                                        </div>
                                        <!-- accordion collapse end -->
                                    </div>

                                @endforelse
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
    {{-- why choose us section --}}
    <section class="portfolio-section-1 py-5" style="background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                        <span class="sub-title text-success fw-bold">
                            {{ App\Models\WhyChooseUsSection::first()?->sub_title ?? 'Why Choose Us?' }}
                        </span>

                        <h2 class="mt-2">
                            {{ App\Models\WhyChooseUsSection::first()?->main_title ?? 'Why DiagnoEdge Labs?' }}
                        </h2>

                        <div class="lead">
                            {!! App\Models\WhyChooseUsSection::first()?->description_1 ?? 'DiagnoEdge Labs has been a trusted name in diagnostics for over a decade.' !!}
                        </div>

                        @if(App\Models\WhyChooseUsSection::first()?->description_2)
                            <div class=" lh-lg">
                                {!! App\Models\WhyChooseUsSection::first()?->description_2 !!}
                            </div>
                        @endif

                    </div>
                </div>

                <!-- Right Side - Cards -->
                <div class="col-lg-6 custom-padding--md-20">
                    @php
                        $section = App\Models\WhyChooseUsSection::first();
                    @endphp

                    <div class="row g-4 align-items-center">

                        <!-- Big Experience Card -->
                        <div class="col-12 col-md-5">
                            <div class="text-center p-5 rounded-4 shadow-lg h-100 d-flex flex-column justify-content-center"
                                style="background: #ffffff; border: 4px solid #54ad4c; min-height: 280px;">
                                @if($section?->big_card_image)
                                    <img src="{{ asset('storage/' . $section->big_card_image) }}" class="mb-3"
                                        style="width: 90px; height: 90px; object-fit: contain;">
                                @else
                                    <i class="fas fa-award mb-3" style="font-size: 4.5rem; color: #54ad4c;"></i>
                                @endif

                                <h3 class="fw-bold mb-0" style="color: #1c5a80; font-size: 4.5rem; line-height: 1;">
                                    {{ $section?->big_card_value ?? '10+' }}
                                </h3>
                                <p class="text-muted fw-medium mt-2 fs-5">
                                    {{ $section?->big_card_description ?? 'Years of Excellence' }}
                                </p>
                            </div>
                        </div>

                        <!-- 4 Small Feature Cards -->
                        <div class="col-12 col-md-7">
                            <div class="row g-3 g-md-4">
                                @for($i = 1; $i <= 4; $i++)
                                    @if($section?->{"small_card_{$i}_title"})
                                        <div class="col-6">
                                            <div class="text-center p-4 rounded-4 shadow h-100 d-flex flex-column justify-content-center"
                                                style="background: #ffffff; border-top: 6px solid #54ad4c; min-height: 140px;">
                                                @if($section?->{"small_card_{$i}_image"})
                                                    <img src="{{ asset('storage/' . $section->{"small_card_{$i}_image"}) }}"
                                                        class="mb-3" style="width: 56px; height: 56px; object-fit: contain;">
                                                @else
                                                    <i class="fas fa-flask mb-3" style="font-size: 2.4rem; color: #54ad4c;"></i>
                                                @endif

                                                <h5 class="fw-bold mb-0" style="color: #1c5a80; font-size: 1.05rem;">
                                                    {{ $section->{"small_card_{$i}_title"} }}
                                                </h5>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-6">
                                            <div class="text-center w-100 py-5">
                                                <h4>No gallery images to show</h4>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- portfolio section start -->
    <section class="portfolio-section-1 pt-50 md-pt-30 pb-50 md-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                </div>
            </div>
            <div class="gallery-section ">
                <div class="container">

                    <!-- Add Swiper container -->
                    <div class="swiper myGallerySwiper">
                        <div class="swiper-wrapper">

                            @forelse ($gallery as $gal)
                                <div class="swiper-slide">
                                    <div class="photo-gallery">
                                        <div class="photo-gallery-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('storage/' . $gal->image) }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="photo-gallery-icon">
                                            <a class="photo-popup" href="{{ asset('storage/' . $gal->image) }}">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center w-100 py-5">
                                    <h4>No gallery images to show</h4>
                                </div>
                            @endforelse





                        </div>


                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- portfolio section end -->


    {{-- accredetittaion section start --}}
    <section class="accredit-sec py-5" style="background:#e6f5e9;">
        <div class="container">
            @php
                $section = App\Models\AccreditationSection::first();
            @endphp

            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                <span class="sub-title">Accreditations & Certifications</span>
                <h2>Why Trust Our Quality Standards?</h2>
                <p class="lead">We follow globally recognized testing standards ensuring precision, safety, and
                    accuracy.</p>
            </div>

            <div class="row g-4 justify-content-center custom-padding--md-10">
                @foreach(range(1, 4) as $i)
                    @if($section && $section->{"title$i"})
                        <div class="col-md-4 col-lg-3">
                            <div class="feature-card text-center p-4">
                                @if($section->{"icon$i"})
                                    <img src="{{ Storage::url($section->{"icon$i"}) }}" alt="{{ $section->{"title$i"} }}"
                                        class="mb-3" style="width: 4.5rem; height: 4.5rem; object-fit: contain;">
                                @else
                                    <i class="fas fa-award mb-3" style="font-size: 4.5rem; color: #54ad4c;"></i>
                                @endif
                                <h6 class="fw-bold">{{ $section->{"title$i"} }}</h6>
                            </div>
                        </div>
                    @else

                        <div class="text-center w-100 py-5">
                            <h4>No Data to show</h4>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- end --}}

    @php
        $blogs = \App\Models\Blog::where('status', 'active')->get();
    @endphp
    <!-- blog section start -->
    <section class="blog-section background-one pt-50 md-pt-30 pb-50 md-pb-30">
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
                @forelse($blogs as $blog)
                    <div class="col-lg-4 col-md-12">
                        <!-- blog grid item 1 start -->

                        <div class="blog-grid-item-1 wow fadeInUp" data-wow-delay=".3s">


                            <div class="blog-grid-image">
                                <a href="{{ route('blog-details', $blog->slug) }}">
                                    <figure class="image-anime">
                                        <img src="{{ Storage::url(path: $blog->image) }}" alt="blog image one">
                                    </figure>
                                </a>
                            </div>
                            <ul class="blog-meta">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-user"></i>
                                        <span>{{ $blog->author }}</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>{{ \Carbon\Carbon::parse($blog->published_at)->format('d-M-Y') }}
                                    </span>
                                </li>
                            </ul>
                            <div class="blog-title">
                                <h3><a href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                                </h3>
                            </div>
                            <div class="blog-grid-content">
                                <p>{{ Str::limit(strip_tags($blog->description), 80) }}...</p>
                                <div class="blog-grid-button">
                                    <a href="{{ route('blog-details', $blog->slug) }}" class="read-more-btn">More
                                        Details</a>
                                </div>
                            </div>
                        </div>


                        <!-- blog grid item 1 end -->
                    </div>
                @empty
                    <div class="text-center w-100 py-5">
                        <h4>No Blogs to show</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- blog section end -->
    <!-- testimonials section start -->
    @include("website.components.testimonials")




</main>


@endsection
{{-- SCRIPT ADD THERE ONLY FOR APPOINTMENT BLADE --}}
@push('scripts')

    <script>



        window.popupCaptcha = function () {
            const btn = document.getElementById('bookingSubmit');
            if (btn) btn.disabled = false;
        };

        let iti;
        // INTEL FLAG SCRIPT FOR PHONE ID
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.querySelector("#mobile");
            iti = window.intlTelInput(input, {
                initialCountry: "auto",
                nationalMode: false,
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                geoIpLookup: function (callback) {
                    fetch('https://ipapi.co/json')
                        .then(response => response.json())
                        .then(data => callback(data.country_code))
                        .catch(() => callback('us'));
                }
            });

            // Apply z-index to flag container
            const flagContainer = input.parentElement.querySelector('.iti__flag-container');
            if (flagContainer) {
                flagContainer.style.zIndex = '9999';
            }

            // Apply z-index to the dropdown country list
            const observer = new MutationObserver(function (mutations) {
                mutations.forEach(function (mutation) {
                    const countryList = document.querySelector('.iti__country-list');
                    if (countryList) {
                        countryList.style.zIndex = '9999';
                    }
                });
            });

            // Observe changes in the DOM so that dropdown gets z-index when created
            observer.observe(document.body, { childList: true, subtree: true });
        });

        document.getElementById("bookingForm").addEventListener("submit", function (e) {
            document.querySelector("#mobile").value = iti.getNumber();
        });



    </script>
@endpush