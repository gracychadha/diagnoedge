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
        <section class="about-section-2 pt-70 md-pt-80 pb-70 md-pb-80">
            <div class="about-shape-1">
                <figure>
                    <img src="assets/images/about/about-shape-3.png" alt="about shape one">
                </figure>
            </div>
            <div class="about-shape-2">
                <figure>
                    <img src="assets/images/about/about-shape-4.png" alt="about shape two">
                </figure>
            </div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <!-- about images box start -->
                        <div class="about-images-box">
                            <!-- about images top start -->
                            <div class="about-images-top wow fadeInUp" data-wow-delay=".2s">
                                <figure class="image-anime">
                                    <img src="assets/images/about/about-2-1.jpg" alt="about one">
                                </figure>
                            </div>
                            <!-- about images top end -->
                            <!-- about images bottom start -->
                            <div class="about-images-bottom">
                                <!-- about year counter start -->
                                <div class="about-year-counter wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="about-year-icon">
                                        <figure>
                                            <img src="assets/images/about/icon-about-4.png" alt="icon why choose four">
                                        </figure>
                                    </div>
                                    <div class="about-year-content">
                                        <p>Our Diagnoedge Hospital Funded in</p>
                                        <h3>1990</h3>
                                    </div>
                                </div>
                                <!-- about year counter end -->
                                <!-- about year images start -->
                                <div class="about-year-images wow fadeInRight" data-wow-delay=".4s">
                                    <figure class="image-anime">
                                        <img src="assets/images/about/about-2-2.jpg" alt="about two">
                                    </figure>
                                </div>
                                <!-- about year images end -->
                            </div>
                            <!-- about images bottom end -->
                        </div>
                        <!-- about images box end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- about content start -->
                        <div class="about-content">
                            <!-- section title start -->

                            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">Know Us Better</span>
                                <h2>Delivering Precision Diagnostics With Compassion and Innovation</h2>
                                <p align="justify">
                                    Diagnoedge Lab is committed to providing accurate, reliable, and advanced diagnostic
                                    services
                                    to support better healthcare decisions. With cutting-edge technology, skilled
                                    professionals,
                                    and a patient-centered approach, we deliver high-quality laboratory testing that ensures
                                    timely
                                    and trustworthy results. Our focus on innovation, excellence, and continuous improvement
                                    enables
                                    us to serve hospitals, clinics, corporate sectors, and individuals with unmatched
                                    efficiency and
                                    care. Since our establishment, we have strived to bring world-class diagnostics closer
                                    to the
                                    community and enhance overall wellness through precise testing and compassionate
                                    service.
                                </p>
                            </div>

                            <!-- section title end -->

                            <!-- about footer start -->
                            <div class="about-footer wow fadeInUp" data-wow-delay=".4s">
                                <div class="about-button-wappper">
                                    <a href="{{ route("about-us") }}" class="theme-button style-1" aria-label="More About">
                                        <span data-text="More About">More About</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="about-contact-box">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="about-contact-box-content">
                                        <p>For Emergency, Call Now</p>
                                        <a href="tel:+19876543210">+1 234 467 88</a>
                                    </div>
                                </div>
                            </div>
                            <!-- about footer end -->
                        </div>
                        <!-- about content end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->


        <!-- counter section start -->
        @php
            $counter = \App\Models\Counter::first();

        @endphp

        @if($counter)
            <section class="counter-section-2 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- counter list start -->
                            <div class="counter-list">
                                <!-- Counter 1 -->
                                <div class="counter-item wow fadeInUp" data-wow-delay=".2s">
                                    <div class="counter-content">
                                        <div class="counter-text">
                                            <span class="counter-value" data-stop="{{ $counter->count1 }}"
                                                data-speed="3000">0</span>+
                                        </div>
                                        <h2 class="counter-title">{{ $counter->title1 }}</h2>
                                    </div>
                                </div>

                                <!-- Counter 2 -->
                                <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                                    <div class="counter-content">
                                        <div class="counter-text">
                                            <span class="counter-value" data-stop="{{ $counter->count2 }}"
                                                data-speed="3000">0</span>+
                                        </div>
                                        <h2 class="counter-title">{{ $counter->title2 }}</h2>
                                    </div>
                                </div>

                                <!-- Counter 3 -->
                                <div class="counter-item wow fadeInUp" data-wow-delay=".4s">
                                    <div class="counter-content">
                                        <div class="counter-text">
                                            <span class="counter-value" data-stop="{{ $counter->count3 }}"
                                                data-speed="3000">0</span>+
                                        </div>
                                        <h2 class="counter-title">{{ $counter->title3 }}</h2>
                                    </div>
                                </div>

                                <!-- Counter 4 -->
                                <div class="counter-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="counter-content">
                                        <div class="counter-text">
                                            <span class="counter-value" data-stop="{{ $counter->count4 }}"
                                                data-speed="3000">0</span>+
                                        </div>
                                        <h2 class="counter-title">{{ $counter->title4 }}</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- counter list end -->
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!-- counter section end -->


        <!-- marquee ticker section start -->
        {{-- @include("website.components.sticker") --}}
        <!-- marquee ticker section end -->

        <!-- why-section start -->
        <section class="why-choose-section-1 pt-70 md-pt-80 pb-70 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- why content start -->
                        <div class="why-content">
                            <!-- section-title start -->
                            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">What Makes Us Different</span>
                                <h2>Precision, Trust, and Unmatched Diagnostic Excellence</h2>
                                <p align="justify">
                                    At Diagnoedge Lab, we combine advanced laboratory technology with a patient-focused
                                    approach
                                    to deliver highly accurate diagnostic results. Our processes are guided by strict
                                    quality
                                    standards, modern equipment, and a team of skilled professionals who ensure reliability
                                    at
                                    every step. From seamless sample collection to transparent reporting, we aim to make
                                    diagnostics simple, fast, and dependable for individuals, doctors, and healthcare
                                    organizations.
                                    Choosing Diagnoedge means choosing clarity, accuracy, and a partner committed to your
                                    well-being.
                                </p>
                            </div>

                            <!-- section-title end -->


                        </div>
                        <!-- why content end -->
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- why choose image start -->
                        <div class="">

                            <figure class="image-anime">
                                <img src="assets/images/about/about-2-1.jpg" style="border-radius: 20px;" alt="why choose image one">
                            </figure>



                        </div>
                        <!-- why choose image end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- why-section end -->

        <!-- testimonials section start -->
        @include("website.components.testimonials")
        <!-- testimonials section end -->

    </main>
@endsection