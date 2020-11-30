<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:type" content="website" />
    <title>{{page_title($title) ?? ''}}</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
  
</head>
<body>

  <!-- Start Preloader Area -->
  <div class="preloader">
    <div class="loader">
      <div class="sbl-half-circle-spin">
        <div></div>
      </div>
    </div>
  </div>
  <!-- End Preloader Area -->

  @include('front.nav.head')
  @yield('content')
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="{{ asset('front/js/jquery.min.js') }}"></script>
  @include('flashy::message')
  @include('front.nav.footer')

  <script src="{{ asset('front/js/jquery.min.js') }}"></script>
  <script src="{{ asset('front/js/popper.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.meanmenu.js') }}"></script>
  <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('front/js/slick.min.js') }}"></script>
  <script src="{{ asset('front/js/odometer.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.appear.js') }}"></script>
  <script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('front/js/form-validator.min.js') }}"></script>
  <script src="{{ asset('front/js/contact-form-script.js') }}"></script>
  <script src="{{ asset('front/js/wow.min.js') }}"></script>
  <script src="{{ asset('front/js/main.js') }}"></script>

  @stack('script.footer')

</body>
</html>


