@extends("website.layout.master-layout")
@section("title", "CBC Test | Complete Blood Count | Book Online")
@section("content")



    <main class="bg-light min-vh-100 py-5">
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
        <section class="pt-4">
            <div class="px-4">


                <div class="row g-5">
                    <!-- Left Sidebar: Navigation -->
                    <div class="col-lg-3">
                        <div class="sticky-top" style="top: 100px;">
                            <div class="list-group rounded-4 overflow-hidden smooth-card mb-4">
                                <a href="#details" class="list-group-item list-group-item-action py-3 nav-item">Test
                                    Details</a>
                                <a href="#overview" class="list-group-item list-group-item-action py-3 nav-item">Test
                                    Overview</a>
                                <a href="#faq" class="list-group-item list-group-item-action py-3 nav-item">FAQs</a>
                            </div>

                            <!-- Quick Info -->
                            <div class="bg-white p-4 rounded-4 smooth-card">
                                <h6 class="fw-bold text-success mb-4"><i class="fas fa-check-circle me-2"></i> Why This
                                    Test?
                                </h6>
                                <div class="d-flex gap-3 mb-3 align-items-center">
                                    <div class="info-icon d-flex align-items-center justify-content-center text-success">
                                        <i class="fas fa-vial fs-4"></i>
                                    </div>
                                    <div>
                                        <strong>Blood Sample</strong><br>
                                        <small class="text-muted">Only 2-3 ml needed</small>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 mb-3 align-items-center">
                                    <div class="info-icon d-flex align-items-center justify-content-center text-primary">
                                        <i class="fas fa-clock fs-4"></i>
                                    </div>
                                    <div><strong>Report in 24 Hours</strong></div>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="info-icon d-flex align-items-center justify-content-center text-success">
                                        <i class="fas fa-home fs-4"></i>
                                    </div>
                                    <div><strong>Free Home Collection</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-lg-6">
                        <!-- Test Details -->
                        <section id="details" class="bg-white rounded-4 p-4 mb-5 shadow-sm">

                            <!-- Top Row -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="text-muted mb-0">Also known as: CBC Haemogram, EDTA Blood</p>
                                <p class="text-muted mb-0">134+ booked in last 3 days</p>
                            </div>

                            <!-- Heading -->
                            <h3 class="text-center fw-bold mb-4">CBC (Complete Blood Count) Test</h3>

                            <!-- Icon Boxes Row -->

                            <!-- Swiper Slider -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="border rounded-3 p-3 d-flex align-items-center gap-2"
                                            style="border-color:#f4caca !important;">
                                            <img src="https://www.metropolisindia.com/newdata/images/testinfo/06_07_2022_07_03_10_169388.svg"
                                                width="35">
                                            <span>Blood Test At Home</span>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border rounded-3 p-3 d-flex align-items-center gap-2"
                                            style="border-color:#f7e9a2 !important;">
                                            <img src="https://www.metropolisindia.com/newdata/images/testinfo/06_07_2022_07_03_10_169388.svg"
                                                width="35">
                                            <span>Quality Test Report</span>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border rounded-3 p-3 d-flex align-items-center gap-2"
                                            style="border-color:#c5d7f7 !important;">
                                            <img src="https://www.metropolisindia.com/newdata/images/testinfo/06_07_2022_07_03_55_345510.svg"
                                                width="35">
                                            <span>Trusted by leading Doctors</span>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="border rounded-3 p-3 d-flex align-items-center gap-2"
                                            style="border-color:#c5d7f7 !important;">
                                            <img src="https://www.metropolisindia.com/newdata/images/testinfo/06_07_2022_07_03_55_345510.svg"
                                                width="35">
                                            <span>Trusted by leading Doctors</span>
                                        </div>
                                    </div>
                                </div>


                            </div>




                        </section>


                        <!-- Overview -->
                        <section id="overview" class="bg-white rounded-4 p-5 smooth-card mb-5">
                            <h2 class="h4 fw-bold mb-4">What is CBC Test?</h2>
                            <p class="lead text-muted">
                                A Complete Blood Count (CBC) is a common blood test that checks your overall health and
                                detects
                                disorders like anemia, infection, and many other diseases.
                            </p>
                            <p>It measures:</p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">Red Blood Cells (RBC)</li>
                                        <li class="mb-2">White Blood Cells (WBC)</li>
                                        <li class="mb-2">Platelets</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">Hemoglobin</li>
                                        <li class="mb-2">Hematocrit</li>
                                        <li class="mb-2">MCV, MCH, RDW</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="mt-4">
                                Commonly used for routine health checkups, before surgery, or to investigate fatigue,
                                weakness,
                                or infections.
                            </p>
                        </section>

                        <!-- FAQs -->
                        <section id="faq" class="p-4 bg-white">
                            <h2 class="h4 fw-bold mb-3">Frequently Asked Questions</h2>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed bg-light text-dark" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q1">
                                            How much does CBC test cost?
                                        </button>
                                    </h2>
                                    <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body bg-light text-dark">
                                            CBC test price is <strong>₹340</strong> with free home sample collection.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed bg-light text-dark" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q2">
                                            Do I need to fast for CBC test?
                                        </button>
                                    </h2>
                                    <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body bg-light text-dark">
                                            No fasting required. You can eat and drink normally.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed bg-light text-dark" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#q3">
                                            When will I get the report?
                                        </button>
                                    </h2>
                                    <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body bg-light text-dark">
                                            Report delivered within <strong>24 hours</strong> via email & WhatsApp.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>

                    <!-- Right Sidebar: Booking -->
                    <!-- Right Sidebar -->
                    <div class="col-lg-3">

                        <!-- Price Card -->
                        <div class="sticky-top mb-4" style="top: 100px;">
                            <div class="bg-white rounded-4 p-4 text-center border border-success shadow-sm"
                                style="border-width:2px;">

                                <h4 class="fw-semibold mb-3">CBC Haemogram, EDTA Blood Price</h4>

                                <div class="d-flex justify-content-center align-items-center gap-2 mb-4">
                                    <img src="https://cdn-icons-png.flaticon.com/512/25/25473.png" width="20">
                                    <span class="fs-3 fw-bold">340</span>
                                </div>

                                <a href="#" class="btn btn-success w-100 fw-semibold py-2 rounded-3">
                                    Add to cart
                                </a>
                            </div>
                        </div>


                        <!-- Home Visit Card -->
                        <div class="sticky-top" style="top: 350px;">

                            <div class="bg-white rounded-4 shadow-sm">

                                <!-- Yellow Header -->
                                <div class="bg-warning text-center fw-semibold rounded-top-4 py-2">
                                    Book a Home Visit Now
                                </div>

                                <div class="p-4 text-center">

                                    <p class="mb-4">
                                        Book any blood test or health checkup<br>
                                        and get tested at the comfort of your home
                                    </p>

                                    <a href="#" class="btn btn-success fw-semibold py-2 px-4 rounded-3">
                                        Get Instant Call Back
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>


@push('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script>
        // Active navigation on scroll
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll('.nav-item');
            const sections = document.querySelectorAll('section[id]');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => {
                            link.classList.remove('nav-link-active');
                            if (link.getAttribute('href') === `#${entry.target.id}`) {
                                link.classList.add('nav-link-active');
                            }
                        });
                    }
                });
            }, { threshold: 0.4 });

            sections.forEach(sec => observer.observe(sec));

            // Smooth scroll
            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
  

                           <script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 15,
        loop: true,
      
        breakpoints: {
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
            },
        },
    });
</script>
@endpush
@endsection