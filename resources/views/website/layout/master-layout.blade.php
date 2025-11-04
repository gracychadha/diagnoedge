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

</html>