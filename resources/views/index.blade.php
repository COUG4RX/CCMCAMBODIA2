<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCMCAMBODIA</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/icon-website/CCM-Logo-with-Transparent-Background-1000-px512.png')}}">
    <!-- JQuery -->
    <script src="{{ asset('assets/js/jQuary.js')}}"></script>
    <!-- fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&family=Roboto&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- bootstrap library -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Animation on scroll  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Animated CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- style.css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/fontawesome/css/all.css')}} "> 
    <!-- hover-master  -->
    <link rel="stylesheet" href="{{ asset('assets/Hover-master/css/hover.css')}}">
    <!-- animation on scroll  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('css')
</head>
<body>
    @yield('index')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- js link  -->
    <script src="{{ asset('assets/js/Menu&dropdown.js')}}"></script>
    <script src="{{ asset('assets/script.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    @yield('script')
</body>
</html>