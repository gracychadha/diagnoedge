<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>


    {{-- css files --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/d.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo/d.png') }}" type="image/x-icon">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- image comparision css -->
    <link rel="stylesheet" href="{{ asset('assets/css/twentytwenty.css') }}">
    <!-- magnific css -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- main css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Load required libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .iti {
            width: 100%;
        }
    </style>

</head>

<body>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>

    {{-- header start --}}
    @include("website.components.header")
    {{-- header end --}}

    {{-- main content --}}
    @yield("content")
    {{-- main content end --}}
    {{-- footer popup --}}
    @include("website.components.popup-footer")
    {{-- footer start --}}
    @include("website.components.footer")
    {{-- footer end --}}

</body>


<!-- Include the reCAPTCHA script (site key in env) -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- jquery meanmenu js -->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!-- wow Js -->
<script src="{{ asset('assets/js/validate.min.js') }}"></script>
<!-- validate js -->
<script src="{{ asset('assets/js/validate.min.js') }}"></script>
<!-- ajax form Js -->
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<!-- image comparision js -->
<script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
<script src="{{ asset('assets/js/jquery.twentytwenty.js') }}"></script>
<!-- appear Js -->
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<!-- magnific Js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- SmoothScroll Js -->
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<!-- main Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- jQuery (already included) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


<script>
    // SWIPER  FOR PRODUCT
    var swiper = new Swiper(".myProductSwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        breakpoints: {
            1200: { // desktops
                slidesPerView: 4,
            },
            992: { // laptops & tablets landscape
                slidesPerView: 3,
            },
            768: { // tablets portrait
                slidesPerView: 2,
            },
            576: { // mobile large
                slidesPerView: 1,
            },
            0: { // mobile small
                slidesPerView: 1,
            },
        },

    });

    // Start of Tawk.to Script
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/691db177832c61195c8c7908/1jadvqflg';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();

    // INTEL FLAG SCRIPT FOR MOBILE
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.querySelector("#mobile");
        const iti = window.intlTelInput(input, {
            initialCountry: "auto",

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

    // INTEL FLAG SCRIPT FOR PHONE ID
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
            initialCountry: "auto",

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


    function recaptchaCallback() {
        document.getElementById('bookingSubmit').disabled = false;
    }
    // BOOKING MODAL FORM SCRIPT
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('bookingModal');
        const closeBtn = document.getElementById('bookingClose');
        const form = document.getElementById('bookingForm');
        const submitBtn = document.getElementById('bookingSubmit');
        const alertBox = document.getElementById('alertBox');
        let iti;



        

        // Open/close modal
        function openBookingModal() {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
        function closeBookingModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
            form.reset();
            if (window.grecaptcha) grecaptcha.reset();
            submitBtn.disabled = true;
            alertBox.innerHTML = '';
        }

        closeBtn.addEventListener('click', closeBookingModal);
        window.addEventListener('click', (e) => { if (e.target === modal) closeBookingModal(); });

        // Auto-open modal after 5s on homepage
        const isHomepage = ['/', '/home', '/index', ''].includes(window.location.pathname);
        if (isHomepage) setTimeout(openBookingModal, 5000);

        // AJAX form submit
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Submitting...';

            // Get full international number
            if (iti) {
                form.querySelector('#mobile').value = iti.getNumber();
            }

            const formData = new FormData(form);
            fetch(form.action, {
                method: "POST",
                headers: { "Accept": "application/json", "X-Requested-With": "XMLHttpRequest" },
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    submitBtn.innerHTML = 'Submit';
                    alertBox.innerHTML = '';

                    if (data.success) {
                        alertBox.innerHTML = `<div class="alert-success">${data.message}</div>`;
                        form.reset();
                        if (window.grecaptcha) grecaptcha.reset();
                        submitBtn.disabled = true;
                        setTimeout(closeBookingModal, 5000);
                    } else {
                        let html = `<div class="alert-error"><ul>`;
                        if (data.errors) {
                            Object.values(data.errors).flat().forEach(err => html += `<li>${err}</li>`);
                        } else {
                            html += `<li>${data.message || 'An error occurred'}</li>`;
                        }
                        html += `</ul></div>`;
                        alertBox.innerHTML = html;
                        if (window.grecaptcha) grecaptcha.reset();
                        submitBtn.disabled = true;
                    }
                })
                .catch(err => {
                    console.error(err);
                    submitBtn.innerHTML = 'Submit';
                    alertBox.innerHTML = `<div class="alert-error">An error occurred. Please try again.</div>`;
                    if (window.grecaptcha) grecaptcha.reset();
                    submitBtn.disabled = true;
                });
        });
    });


    // DATE PICKER FOR APPOINTMENT FORM
    flatpickr("#appointmentdate", {
        altInput: true,
        altFormat: "d-m-Y",
        dateFormat: "d-m-Y",  // output format: 2025-11-21
        minDate: "today",
        allowInput: true,
    });
    // CAPTCHA BTN ENABLE DISABLE LOGIC
    document.addEventListener("DOMContentLoaded", function () {
        window.recaptchaCallback = function () {
            const captchaBtn = document.getElementById('captcha-btn');
            if (captchaBtn) {
                captchaBtn.disabled = false;
            }
        };
    });

</script>


<script>
    var swiper = new Swiper(".myGallerySwiper", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            320: { slidesPerView: 1 },
            576: { slidesPerView: 2 },
            991: { slidesPerView: 3 }
        }
    });

</script>

</html>