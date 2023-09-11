<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title','CUC GroupHome')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/logo_cucGroupHome.png" type="image/x-icon">
  <meta name="keywords" content="@yield('meta_keywords','CUC GroupHome RUKUN')">
  <meta name="description" content="@yield('meta_description','CUC GroupHomr RUKUN')">
  <meta name="author" content="Pio Tirta">

  <!-- Google Fonts -->
  <link rel="icon" href="" type="image/png" sizes="20x20">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  @yield('head')
  
</head>

<body>

  @yield('content')

  {{-- @include('partials.footer') --}}

  {{-- <a href="#" class="telp"><i class="fa fa-phone"></i>#</a> --}}
  {{-- <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a> --}}

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/app.js') }}"></script>

  @yield('scripts')

  

</body>

</html>
