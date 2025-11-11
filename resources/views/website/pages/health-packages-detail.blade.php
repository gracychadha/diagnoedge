@extends("website.layout.master-layout")
@section("title", "Healthcare Packages | Diagnoedge")
@section("content")
    <!-- main start -->
    <main class="main">
        <!-- breadcrumb section start -->
        <section class="breadcrumb-section" data-img-src="{{ asset('assets/images/breadcrumb/breadcrumb.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb content start -->
                        <div class="breadcrumb-content">
                            <!-- breadcrumb title start -->
                            <div class="breadcrumb-title wow fadeInUp" data-wow-delay=".2s">
                                <h1>Health Packages</h1>
                            </div>
                            <!-- breadcrumb title end -->
                            <!-- nav start -->
                            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Health Packages</li>
                                </ol>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- breadcrumb content end -->
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape">
                <img class="breadcrumb-shape-one" src="{{ asset('assets/images/shape/shape-4.png') }}"
                    alt="breadcrumb shape one">
                <img class="breadcrumb-shape-two" src="{{ asset('assets/images/shape/square-blue.png') }}"
                    alt="breadcrumb shape two">
                <img class="breadcrumb-shape-three" src="{{ asset('assets/images/shape/plus-orange.png') }}"
                    alt="breadcrumb shape three">
            </div>
        </section>
        <!-- breadcrumb section end -->

        <!--  section start -->
        <section class="blog-section pt-70 md-pt-80 pb-70 md-pb-80">
            <div class="container-fluid">
                <div class="row">
                    {{-- sidebar --}}
                    <div class="col-lg-3">

                        <div class="widget-sidebar">
                            <!-- widget search start -->
                            <div class="widget widget-search">
                                <!-- widget title start -->
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <!-- widget title end -->
                                <!-- widget content start -->
                                <div class="widget-content">
                                    <form action="#">
                                        <div class="form-group mb-0">
                                            <div class="form-floating field-inner">
                                                <input id="widgetsearch" name="widgetsearch"
                                                    class="form-control white-field" placeholder="Search here...."
                                                    type="text" autocomplete="off">
                                                <label for="widgetsearch">Search </label>
                                                <button type="submit" aria-label="search submit"><i
                                                        class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- widget content end -->
                            </div>
                            <!-- widget search end -->
                            <!-- widget categories list start -->
                            <div class="widget widget-categories-list">
                                <!-- widget title start -->
                                <div class="widget-title">
                                    <h3>Categories List</h3>
                                </div>
                                <!-- widget title end -->
                                <!-- widget content start -->
                                <div class="widget-content">
                                  <ul class="category-list">
                                     <li class="test-sidebar-list">
                                       Package Details
                                    </li>
                                     <li class="test-sidebar-list">
                                       Package Overview
                                    </li>
                                     <li class="test-sidebar-list">
                                       Package Included
                                    </li>
                                     <li class="test-sidebar-list">
                                       Package Faq
                                    </li>
                                     <li class="test-sidebar-list">
                                       Package Review
                                    </li>
                                  </ul>
                                </div>
                                <!-- widget content end -->
                            </div>
                            <!-- widget categories list end -->
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- section title start -->
                                <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s">
                                    <span class="sub-title">Health Package Detail</span>
                                    <h2>Health test packages according to body test</h2>
                                </div>

                                <!-- section title end -->
                                <div class="card shadow p-3 border-none wow fadeInUp mb-3" data-wow-delay=".2s">
                                    <h5>Overview</h5>
                                    <p align="justify">
                                        The TruHealth Cancer Screen 360 Male is a comprehensive cancer screening test
                                        introduced by Metropolis Healthcare specifically for men. This cancer test offers
                                        early insights into various types of cancers through a combination of tumour
                                        markers, hereditary cancer risk analysis, and gender-specific screening modules like
                                        PSA testing for prostate cancer.

                                        By providing a multi-layered approach to cancer screening tests for males, the
                                        TruHealth Cancer Screen 360 Male aims to detect cancer at an early stage when it is
                                        more treatable, promoting preventive care and long-term health planning. The
                                        package's inclusion of genetic risk analysis sets it apart as a holistic tool for
                                        understanding an individual's cancer risks.
                                    </p>
                                </div>
                                <div class="card shadow p-3 border-none wow fadeInUp" data-wow-delay=".2s">
                                    <h5> Profile and Test Parameters</h5>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-sidebar">
                            <!-- widget search start -->
                            <div class="widget widget-search">
                                <!-- widget title start -->
                                <div class="widget-title">
                                    <h3>Tru Health Vital Plus</h3>
                                </div>
                                <!-- widget title end -->
                                <!-- widget content start -->
                                <div class="widget-content">
                                    <h5>Rs 4750</h5>
                                </div>
                                <!-- widget content end -->
                            </div>
                            <!-- widget search end -->
                            <!-- widget categories list start -->
                            <div class="widget widget-categories-list">
                                <!-- widget title start -->
                                <div class="widget-title">
                                    <h3>Get a Call Now</h3>
                                </div>
                                <!-- widget title end -->
                                <!-- widget content start -->
                                <div class="widget-content">
                                    <p>Book any blood test or health checkup and get tested at the comfort of your home</p>
                                    <a href="{{ route('appointment') }}" class="theme-button style-1"
                                        aria-label="Book Appointment">
                                        <span data-text="Book Appointment">Book Appointment</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- widget content end -->
                            </div>
                            <!-- widget categories list end -->


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section end -->
    </main>
    <!-- main end -->
@endsection