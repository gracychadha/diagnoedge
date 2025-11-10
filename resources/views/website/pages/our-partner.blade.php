@extends("website.layout.master-layout")
@section("title", " Our Partners | Diagnoedge")
@section("content")
    {{-- main section --}}
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
                                <h1>Our Partner</h1>
                            </div>
                            <!-- breadcrumb title end -->
                            <!-- nav start -->
                            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our Partner</li>
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
            <div class="container-fluid">
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
                                        <p>Our Carenix Hospital Funded in</p>
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
                                <span class="sub-title">About Us</span>
                                <h2>Where world class dentistry meets whole person wellness.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.</p>
                            </div>
                            <!-- section title end -->
                            <!-- check list two col start -->
                            <div class="check-list-two-col wow fadeInUp" data-wow-delay=".3s">
                                <ul>
                                    <li>Comprehensive Care Services</li>
                                    <li>Highly Skilled Medical Team</li>
                                    <li>Patient Centered Approach</li>
                                    <li>Nutrition Counseling</li>
                                    <li>Experienced Doctors</li>
                                    <li>24/7 Virtual Care Services</li>
                                </ul>
                            </div>
                            <!-- check list two col end -->
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
        <!-- why-section start -->
        <section class="why-choose-section-1 pt-70 md-pt-80 pb-70 md-pb-80">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- why content start -->
                        <div class="why-content">
                            <!-- section-title start -->
                            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">Why Diagnoedge</span>
                                <h2>Compassion and expertise, perfectly combined</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
                                    voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem
                                    voluptates modi omnis
                                    dolore et mollitia dolorem alias voluptatibus tempora soluta ut officia ullam magnam
                                    obcaecati accusantium.</p>
                            </div>
                            <!-- section-title end -->


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
                                <a class="about-circle" href="{{ route('about-us') }}" aria-label="about circle">
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


       <!-- appointment section start -->
        @include("website.components.cta")
        <!-- appointment section end -->
    </main>
@endsection