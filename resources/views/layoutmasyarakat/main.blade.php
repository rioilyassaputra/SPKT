<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-SPKT - Sentra Pelayanan Kepolisian Terpadu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('masyarakat/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('masyarakat/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('masyarakat/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('masyarakat/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('masyarakat/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        @include('layoutmasyarakat.navbar')
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        {{-- @include('layoutmasyarakat.header') --}}
        @yield('header')
    </div>
    <!-- Header End -->


    <!-- About Start -->
    {{-- <div class="container-xxl py-5">
        @yield('about')
    </div> --}}
    <!-- About End -->


    <!-- Facts Start -->
    {{-- <div class="container-xxl bg-light py-5 my-5">
        @yield('facts')
    </div> --}}
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        @yield('features')
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    {{-- <div class="container-xxl bg-light py-5 my-5">
        @yield('service')
    </div> --}}
    <!-- Service End -->


    <!-- Roadmap Start -->
    {{-- <div class="container-xxl py-5">
        @yield('roadmap')
    </div> --}}
    <!-- Roadmap End -->


    <!-- Token Sale Start -->
    {{-- <div class="container-xxl bg-light py-5 my-5">
        @yield('tokensale')
    </div> --}}
    <!-- Token Sale Start -->


    <!-- FAQs Start -->
    {{-- <div class="container-xxl py-5">
        @yield('faqs')
    </div> --}}
    <!-- FAQs Start -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        @yield('footer')
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('masyarakat/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('masyarakat/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('masyarakat/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('masyarakat/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('masyarakat/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('masyarakat/js/main.js') }}"></script>
</body>

</html>
