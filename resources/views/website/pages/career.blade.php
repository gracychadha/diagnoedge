@extends("website.layout.master-layout")
@section("title", " Career | Diagnoedge")
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
                                <h1>Career</h1>
                            </div>
                            <!-- breadcrumb title end -->
                            <!-- nav start -->
                            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Career</li>
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
        <!-- pricing section start -->
        <section class="pricing-section-1 bg-section pt-70 md-pt-80 pb-70 md-pb-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title area start -->
                        <div class="section-title-area">
                            <div class="section-title">
                                <span class="sub-title">Jobs &amp; Offers</span>
                                <h2>Find Your Dream Job</h2>
                            </div>
                            <div class="section-title-content">
                                <p>Explore thousands of opportunities and take the next step in your career journey.Explore
                                    thousands of opportunities and take the next step in your career journey.Explore
                                    thousands of opportunities and take the next step in your career journey.</p>
                            </div>
                        </div>
                        <!-- section title area end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- pricing tabs start -->
                        <div class="pricing-tabs">
                            <!-- nav start -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    {{-- <button class="nav-link active" id="nav-lab-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-lab" type="button" role="tab" aria-controls="nav-lab"
                                        aria-selected="true">Lab Packages</button> --}}
                                    <button class="nav-link" id="nav-career-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-career" type="button" role="tab" aria-controls="nav-career"
                                        aria-selected="false">Job Careers</button>
                                </div>
                            </nav>
                            <!-- nav end -->
                        </div>
                        <!-- pricing tabs end -->
                    </div>
                </div>

                <!-- tab content start -->
                <div class="tab-content">

                    <!-- =================== LAB PACKAGES TAB =================== -->
                    <div class="tab-pane fade  " id="nav-lab" role="tabpanel" aria-labelledby="nav-lab-tab"
                        tabindex="0">
                        <div class="row align-items-center">

                            <!-- Basic Health Checkup -->
                            <div class="col-lg-4 col-md-12">
                                <div class="pricing-item">
                                    <div class="pricing-content">
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Basic Health Checkup</p>
                                            <h3 class="pricing-plan-price">₹999<span>/Per Test</span></h3>
                                            <p>Ideal for individuals looking for a quick and essential health assessment.
                                            </p>
                                        </div>
                                        <div class="pricing-list">
                                            <p class="text-black">What's included?</p>
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Blood Sugar & CBC</li>
                                                    <li>Lipid Profile</li>
                                                    <li>Urine Routine</li>
                                                    <li>Doctor Consultation</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-button-wapper">
                                                <a href="" class="theme-button style-2" aria-label="Book Now">
                                                    <span data-text="Book Now">Book Now</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Comprehensive Health Plan -->
                            <div class="col-lg-4 col-md-12">
                                <div class="pricing-item tagged">
                                    <div class="pricing-content">
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Comprehensive Health Plan <span>Popular</span></p>
                                            <h3 class="pricing-plan-price">₹2499<span>/Full Body</span></h3>
                                            <p class="text-white">Get advanced diagnostics for complete health evaluation.
                                            </p>
                                        </div>
                                        <div class="pricing-list">
                                            <p class="text-white">What's included?</p>
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Thyroid & Liver Function</li>
                                                    <li>Kidney Profile</li>
                                                    <li>Vitamin D & B12</li>
                                                    <li>ECG & X-Ray</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-button-wapper">
                                                <a href="#" class="theme-button style-4" aria-label="Book Now">
                                                    <span data-text="Book Now">Book Now</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Premium Wellness Package -->
                            <div class="col-lg-4 col-md-12">
                                <div class="pricing-item">
                                    <div class="pricing-content">
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Premium Wellness Package</p>
                                            <h3 class="pricing-plan-price">₹4999<span>/Full Body</span></h3>
                                            <p>Advanced preventive package designed for executives and families.</p>
                                        </div>
                                        <div class="pricing-list">
                                            <p class="text-black">What's included?</p>
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Full Body Scan</li>
                                                    <li>Cardiac Risk Marker</li>
                                                    <li>Hormone Panel</li>
                                                    <li>Nutrition Consultation</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-button-wapper">
                                                <a href="#" class="theme-button style-2" aria-label="Book Now">
                                                    <span data-text="Book Now">Book Now</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- =================== JOB CAREER TAB =================== -->
                    <div class="tab-pane fade active show" id="nav-career" role="tabpanel" aria-labelledby="nav-career-tab"
                        tabindex="0">
                        <div class="row align-items-center">

                            <!-- Lab Technician -->
                            <div class="col-lg-4 col-md-12">
                                <div class="pricing-item">
                                    <div class="pricing-content">
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Lab Technician</p>
                                            <h3 class="pricing-plan-price">Full Time<span> (On-site)</span></h3>
                                            <p>Perform diagnostic tests and ensure high-quality lab reporting.</p>
                                        </div>
                                        <div class="pricing-list">
                                            <p class="text-black">Job Details</p>
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Experience: 1–3 Years</li>
                                                    <li>Qualification: B.Sc / DMLT</li>
                                                    <li>Location: New Delhi</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-button-wapper">
                                                <a href="#" class="theme-button style-2" aria-label="Apply Now">
                                                    <span data-text="Apply Now">Apply Now</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Phlebotomist -->
                            <div class="col-lg-4 col-md-12">
                                <div class="pricing-item tagged">
                                    <div class="pricing-content">
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Phlebotomist <span>Urgent</span></p>
                                            <h3 class="pricing-plan-price">Contract<span> (Field Work)</span></h3>
                                            <p class="text-white">Responsible for collecting blood samples and patient
                                                coordination.</p>
                                        </div>
                                        <div class="pricing-list">
                                            <p class="text-white">Job Details</p>
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Experience: 0–2 Years</li>
                                                    <li>Qualification: DMLT / Certified Phlebotomy</li>
                                                    <li>Location: Multiple Cities</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-button-wapper">
                                                <a href="#" class="theme-button style-4" aria-label="Apply Now">
                                                    <span data-text="Apply Now">Apply Now</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pathologist -->
                            <div class="col-lg-4 col-md-12">
                                <div class="pricing-item">
                                    <div class="pricing-content">
                                        <div class="pricing-text">
                                            <p class="pricing-plan-title">Pathologist (MD)</p>
                                            <h3 class="pricing-plan-price">Senior<span> (Consultant)</span></h3>
                                            <p>Supervise lab operations, review reports, and ensure diagnostic accuracy.</p>
                                        </div>
                                        <div class="pricing-list">
                                            <p class="text-black">Job Details</p>
                                            <div class="check-list mb-30">
                                                <ul>
                                                    <li>Experience: 5+ Years</li>
                                                    <li>Qualification: MD Pathology</li>
                                                    <li>Location: Gurgaon / Noida</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-button-wapper">
                                                <a href="#" class="theme-button style-2" aria-label="Apply Now">
                                                    <span data-text="Apply Now">Apply Now</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- tab content end -->

            </div>
        </section>
        <!-- pricing section end -->


        <!-- appointment section start -->
        @include("website.components.cta")
        <!-- appointment section end -->
    </main>
@endsection