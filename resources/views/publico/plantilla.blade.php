<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>SCD</title>
    	  <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('publico/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('publico/assets/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('publico/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('publico/assets/css/templatemo_misc.css')}}">
        <link rel="stylesheet" href="{{asset('publico/assets/css/templatemo_style.css')}}">
        <script src="{{asset('publico/assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js')}}"></script>
    </head>
    <body>
        <div class="site-main">
            <div class="site-header">
                @include('publico.menu')
            </div> <!-- /.site-header -->
        </div>
        <div class="content-section">
            @yield('label1')
        </div> <!-- /#portfolio -->
            
        <div id="footer">
            @include('publico.pie')
        </div> <!-- /#footer -->
        
        <script src="{{asset('publico/assets/js/vendor/jquery-1.11.0.min.js')}}"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="{{asset('publico/assets/js/bootstrap.js')}}"></script>
        <script src="{{asset('publico/assets/js/plugins.js')}}"></script>
        <script src="{{asset('publico/assets/js/main.js')}}"></script>
    </body>
</html>