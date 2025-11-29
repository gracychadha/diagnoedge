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
        @php
            $aboutSection = \App\Models\AboutSection::where('is_active', true)->first();
        @endphp

        @if($aboutSection)
            <section class="about-section-4 pt-50 md-pt-80 pb-50 md-pb-80">
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
        @endif
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

        <!-- testimonials section start -->
        @include("website.components.testimonials")
        <!-- testimonials section end -->

        <!-- marquee ticker section start -->
        @include("website.components.sticker")
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
                                <span class="sub-title">Why Diagnoedge</span>
                                <h2>Compassion and expertise, perfectly combined</h2>
                                <p align="justify">DiagnoEdge Lab stands for accuracy, reliability, and patient-first care. With advanced
                                    diagnostic technology, certified professionals, and stringent quality protocols, we
                                    ensure every test delivers precise and trustworthy results. Our fast turnaround time,
                                    transparent processes, and commitment to affordability make healthcare more accessible
                                    for everyone. At DiagnoEdge, we don’t just provide reports—we provide clarity,
                                    confidence, and support for better health decisions.</p>
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
                                <a class="about-circle" href="{{ route('contact-us') }}" aria-label="contact circle">
                                    <img src="assets/images/shape/round-about-us.png" alt="round contact us">
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
    </main>
@endsection