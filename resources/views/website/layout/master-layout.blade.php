<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>
    {{-- css files --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
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


</head>

<body>

    {{-- header start --}}
    @include("website.components.header")
    {{-- header end --}}

    {{-- main content --}}
    @yield("content")
    {{-- main content end --}}

    {{-- footer start --}}
    @include("website.components.footer")
    {{-- footer end --}}

</body>

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

<script>
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
</script>

</html>