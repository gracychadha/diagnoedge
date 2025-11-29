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
                            {{-- <div class="about-images-bottom">
                                
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
                               
                                <div class="about-year-images wow fadeInRight" data-wow-delay=".4s">
                                    <figure class="image-anime">
                                        <img src="assets/images/about/about-2-2.jpg" alt="about two">
                                    </figure>
                                </div>
                                
                            </div> --}}
                        </div>
                        <!-- about images box end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- about content start -->
                        <div class="about-content">
                            <!-- section title start -->

                            <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">About Partner</span>
                                <h2>Where world class dentistry meets whole person wellness.</h2>
                                <p align="justify">We collaborate with trusted and industry-leading partners who share our
                                    commitment to
                                    quality, innovation, and customer satisfaction. Our partnerships enable us to deliver
                                    advanced solutions, broaden our service capabilities, and create meaningful value for
                                    our clients. Together, we work towards a shared vision—bringing expertise, reliability,
                                    and exceptional results to every project. Through strong collaboration and continuous
                                    growth, our partners play a vital role in helping us achieve excellence across all our
                                    services.</p>
                            </div>
                            <!-- section title end -->
                            <!-- check list two col start -->
                            <div class="check-list-two-col wow fadeInUp" data-wow-delay=".3s">
                                <ul>
                                    <li>Trusted Collaboration</li>
                                    <li>Enhanced Capabilities</li>
                                    <li>Shared Vision</li>
                                    <li>Mutual Growth</li>

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
          <!-- partners section start -->
        @php
            $partners = \App\Models\Partner::where('status', 'active')->get();
        @endphp

        @if($partners->count() > 0)
            <section class="partners-section-1 pt-70 md-pt-80 pb-70 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title start -->
                            <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s">
                                <span class="sub-title">Our Partners</span>
                                <h2>Partners Who Trust Diagnoedge</h2>
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
                                    @foreach($partners as $partner)
                                        <!-- swiper slide start -->
                                        <div class="swiper-slide">
                                            <!-- partners item start -->
                                            <div class="partners-item">
                                                <div class="partners-image text-center">
                                                    <figure>
                                                        <img src="{{ asset('storage/' . $partner->image) }}" alt="Partner Logo"
                                                            class="img-fluid" loading="lazy"
                                                            onerror="this.src='{{ asset('assets/images/partners/placeholder.png') }}'">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- partners item end -->
                                        </div>
                                        <!-- swiper slide end -->
                                    @endforeach
                                </div>
                                <!-- swiper wrapper end -->
                            </div>
                            <!-- partners slider end -->
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!-- partners section end -->
      


       
    </main>
@endsection