<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $seo = getSeo(request()->path());
        // setting
        $settings = App\Models\Setting::first();
        $socials = $settings->social_links;
    @endphp


    {{-- <title>@yield('title')</title> --}}

    <title>{{ $seo->title ?? 'Welcome to Diagnoedge'}}</title>
    <meta name="keywords" content="{{ $seo->keywords ?? 'Diagnoedge'}}">
    <meta name="description" content="{{ $seo->description ?? 'Diagnoedge'}}">



    {{-- css files --}}
    <link rel="shortcut icon"
        href="{{ $settings->favicon ? asset('storage/' . $settings->favicon) : asset('assets/images/logo/d.png') }}"
        type="image/x-icon">
    <link rel="icon"
        href="{{ $settings->favicon ? asset('storage/' . $settings->favicon) : asset('assets/images/logo/d.png') }}"
        type="image/x-icon">
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include the reCAPTCHA script (site key in env) -->


    <style>
        .iti {
            width: 100%;
        }

        /* Mobile Fix */
        @media (max-width: 768px) {
            .talk-to-us-btn {
                bottom: 90px !important;
                /* Move above footer */
                right: 15px !important;
                /* Adjust position */
                transform: scale(0.9);
                /* Optional: Slightly smaller button */
            }
        }

        input:read-only {
            background: #dde7dd;
        }

        input[readonly]:hover {
            background: #dde7dd;
        }

        #carousel-slider {
            max-height: 400px;
        }
    </style>
    @stack('styles')
</head>

<body>




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






    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>
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
        function footerCaptcha() {
            const btn = document.getElementById('bookingSubmit1');
            if (btn) btn.disabled = false;
        }

        function popupCaptcha() {
            const btn = document.getElementById('bookingSubmit');
            if (btn) btn.disabled = false;
        }

        function headerCaptcha() {
            console.log("HEADER CAPTCHA SUCCESS");
            const btn = document.getElementById('HeaderBookingSubmit');
            if (btn) btn.disabled = false;
        }
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>




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

        function autoSearch(inputId, resultId) {
            document.getElementById(inputId).addEventListener('keyup', function () {

                let keyword = this.value.toLowerCase();

                if (keyword.length < 2) {
                    document.getElementById(resultId).innerHTML = '';
                    return;
                }

                fetch(`/search-all?keyword=` + keyword)
                    .then(res => res.json())
                    .then(data => {
                        let output = "";

                        if (data.results.length > 0) {
                            data.results.forEach(item => {
                                output += `
                                                                                  <a href="${item.url}" class="p-2 w-100 d-block border-bottom result-item bg-light" style="font-size:16px;">
                                                                                    <img 
                                                                                    src="storage/${item.icon}" 
                                                                                    alt="${item.title}" 
                                                                                    style="width:40px;height:40px;object-fit:cover;border-radius:6px; border: 1px solid grey; margin-right:10px;"
                                                                                >
                                                        ${item.title}
                                                        </a>`;
                            });
                        } else {
                            output = `<div class="p-2 text-danger">No related option found</div>`;
                        }

                        document.getElementById(resultId).innerHTML = output;
                    });
            });
        }
        autoSearch('already_know', 'searchResult');
        autoSearch('already_know2', 'searchResult2');


    </script>
   
    @stack('scripts')


</body>

</html>