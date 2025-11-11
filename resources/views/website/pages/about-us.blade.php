@extends("website.layout.master-layout")
@section("title", " About Us | Diagnoedge")
@section("content")
    <main class="main">
        <!-- breadcrumb section start -->
        <section class="breadcrumb-section" data-img-src="assets/images/breadcrumb/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb content start -->
                        <div class="breadcrumb-content">
                            <!-- breadcrumb title start -->
                            <div class="breadcrumb-title wow fadeInUp" data-wow-delay=".2s">
                                <h1>About Us</h1>
                            </div>
                            <!-- breadcrumb title end -->
                            <!-- nav start -->
                            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- breadcrumb content end -->
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape">
                <img class="breadcrumb-shape-one" src="assets/images/shape/shape-4.png" alt="breadcrumb shape one">
                <img class="breadcrumb-shape-two" src="assets/images/shape/square-blue.png" alt="breadcrumb shape two">
                <img class="breadcrumb-shape-three" src="assets/images/shape/plus-orange.png" alt="breadcrumb shape three">
            </div>
        </section>
        <!-- breadcrumb section end -->

        <!-- about section start -->
        <section class="about-section-4 pt-70 md-pt-80 pb-70 md-pb-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <!-- section title start -->
                        <div class="section-title mb-20 wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title">About Us</span>
                            <h2>About DiagnoEdge Lab</h2>
                        </div>
                        <!-- section title end -->
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <!-- about content start -->
                        <div class="about-content wow fadeInUp" data-wow-delay=".3s">
                            <!-- about content text start -->
                            <div class="about-content-text">

                                <p align="justify">
                                    At DiagnoEdge Lab, we combine cutting-edge diagnostic technology with expert medical
                                    insights to deliver accurate, reliable, and timely results. Our mission is to empower
                                    better health decisions through precision testing, personalized care, and a commitment
                                    to excellence in laboratory diagnostics.

                                    
                                </p>
                                <p align="justify">
                                    We understand that every test tells a story — that’s why we ensure each report is
                                    handled with utmost care, accuracy, and confidentiality. Whether it’s routine blood work
                                    or advanced molecular testing, our team of qualified pathologists and lab professionals
                                    work diligently to provide results you can trust.
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
                                        <h3>Accuracy Firs</h3>
                                        <p>We use the latest diagnostic equipment and standardized testing protocols to ensure precise results every time.</p>
                                    </div>
                                </div>
                                <div class="about-features-item">
                                    <div class="about-features-icon">
                                        <figure>
                                            <img src="assets/images/about/icon-about-2.png" alt="icon about two">
                                        </figure>
                                    </div>
                                    <div class="about-features-title">
                                        <h3>Patient-Centric Approach</h3>
                                        <p>Your health is our priority — we focus on delivering quick turnaround times and seamless sample collection services.</p>
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


        <!-- counter section start -->
        <section class="counter-section-2 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- counter list start -->
                        <div class="counter-list">
                            <!-- counter item start -->
                            <div class="counter-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="counter-content">
                                    <div class="counter-text"><span class="counter-value" data-stop="90"
                                            data-speed="3000">0</span>+</div>
                                    <h2 class="counter-title">Expert Doctors</h2>
                                </div>
                            </div>
                            <!-- counter item end -->
                            <!-- counter item start -->
                            <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="counter-content">
                                    <div class="counter-text"><span class="counter-value" data-stop="26"
                                            data-speed="3000">0</span>+</div>
                                    <h2 class="counter-title">Diffrent Services</h2>
                                </div>
                            </div>
                            <!-- counter item end -->
                            <!-- counter item start -->
                            <div class="counter-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="counter-content">
                                    <div class="counter-text"><span class="counter-value" data-stop="35"
                                            data-speed="3000">0</span>+</div>
                                    <h2 class="counter-title">Happy Patients</h2>
                                </div>
                            </div>
                            <!-- counter item end -->
                            <!-- counter item start -->
                            <div class="counter-item wow fadeInUp" data-wow-delay=".5s">
                                <div class="counter-content">
                                    <div class="counter-text"><span class="counter-value" data-stop="10"
                                            data-speed="3000">0</span>+</div>
                                    <h2 class="counter-title">Awards Win</h2>
                                </div>
                            </div>
                            <!-- counter item end -->
                        </div>
                        <!-- counter list end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- counter section end -->

        <!-- testimonials section start -->
        @include("website.components.testimonials")
        <!-- testimonials section end -->

        <!-- marquee ticker section start -->
        @include("website.components.sticker")
        <!-- marquee ticker section end -->

        <!-- partners section start -->
        <section class="partners-section-1 pt-70 md-pt-80 pb-70 md-pb-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title">Our Partners</span>
                            <h2>Partners Who Trust Industrie</h2>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- partners slider start -->
                        <div class="swiper partners-slider">
                            <!-- swiper wrapper start -->
                            <div class="swiper-wrapper">
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- partners item start -->
                                    <div class="partners-item">
                                        <div class="partners-image text-center">
                                            <figure>
                                                <img src="assets/images/partners/partners-1.png" alt="partners one">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- partners item end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- partners item start -->
                                    <div class="partners-item">
                                        <div class="partners-image text-center">
                                            <figure>
                                                <img src="assets/images/partners/partners-2.png" alt="partners two">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- partners item end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- partners item start -->
                                    <div class="partners-item">
                                        <div class="partners-image text-center">
                                            <figure>
                                                <img src="assets/images/partners/partners-3.png" alt="partners three">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- partners item end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- partners item start -->
                                    <div class="partners-item">
                                        <div class="partners-image text-center">
                                            <figure>
                                                <img src="assets/images/partners/partners-4.png" alt="partners four">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- partners item end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- partners item start -->
                                    <div class="partners-item">
                                        <div class="partners-image text-center">
                                            <figure>
                                                <img src="assets/images/partners/partners-5.png" alt="partners five">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- partners item end -->
                                </div>
                                <!-- swiper slide end -->
                                <!-- swiper slide start -->
                                <div class="swiper-slide">
                                    <!-- partners item start -->
                                    <div class="partners-item">
                                        <div class="partners-image text-center">
                                            <figure>
                                                <img src="assets/images/partners/partners-6.png" alt="partners six">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- partners item end -->
                                </div>
                                <!-- swiper slide end -->
                            </div>
                            <!-- swiper wrapper end -->
                        </div>
                        <!-- partners slider end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- partners section end -->
    </main>
@endsection