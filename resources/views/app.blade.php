<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('theme/frontend') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('theme/frontend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('theme/frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('theme/frontend') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ asset('theme/frontend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('theme/frontend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('theme/frontend') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{ asset('theme/frontend') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('theme/frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('theme/frontend') }}/assets/css/style.css" rel="stylesheet">
  @yield('css')

  <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
    @include('Inc.header')
  <!-- End Header -->



    @yield('content')

  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Inc.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('theme/frontend') }}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('theme/frontend') }}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('theme/frontend') }}/assets/js/main.js"></script>
  @yield('script')

</body>

</html>
