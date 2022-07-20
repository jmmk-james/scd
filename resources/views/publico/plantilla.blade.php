<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="Jmmk">
  
  <title>SCD</title>
  <!--<link rel="shortcut icon" href="{{asset('publico/assets/favicon1.ico')}}" type="image/x-icon">-->
  <link rel="stylesheet" type="text/css" href="{{asset('publico/assets/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('publico/assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('publico/assets/vendor/animate/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('publico/assets/vendor/owl-carousel/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('publico/assets/vendor/nice-select/css/nice-select.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('publico/assets/vendor/fancybox/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('publico/assets/css/virtual.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{asset('publico/assets/css/topbar.virtual.css')}}">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  
  <div class="vg-page page-home2">
    @include('publico.menu')  
  </div>
  
  @yield('label1')
  
  
  @include('publico.testimonial')
  
  <script src="{{asset('publico/assets/js/jquery-3.5.1.min.js')}}"></script>
    
  <script src="{{asset('publico/assets/js/bootstrap.bundle.min.js')}}"></script>
    
  <script src="{{asset('publico/assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script> 
  <script src="{{asset('publico/assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
    
  <script src="{{asset('publico/assets/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
    
  <script src="{{asset('publico/assets/vendor/fancybox/js/jquery.fancybox.min.js')}}"></script>

  <script src="{{asset('publico/assets/vendor/wow/wow.min.js')}}"></script>

  <script src="{{asset('publico/assets/vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>

  <script src="{{asset('publico/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>  
  <script src="{{asset('publico/assets/js/topbar-virtual.js')}}"></script>
</body>
</html>