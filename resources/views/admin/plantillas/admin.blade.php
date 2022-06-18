<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="scd sistema certificados digitales">
        <meta name="author" content="JMMK">
        <meta name="keywords" content="scd sistema certificados digitales">

        <title>SCD</title>

        <!-- Fontfaces CSS-->
        <link href="{{asset('admin/assets/css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{asset('admin/assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="{{asset('admin/assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{asset('admin/assets/css/theme.css')}}" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            @include('admin.plantillas.cabeseramovil')
            @include('admin.plantillas.menu')
            <!-- PAGE CONTAINER-->
		    <div class="page-container">
                @include('admin.plantillas.cabesera')
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                @yield('label1')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAIN CONTENT-->
            </div>
            <!-- PAGE CONTAINER-->
        </div>

        <!-- Jquery JS-->
        <script src="{{asset('admin/assets/vendor/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap JS-->
        <script src="{{asset('admin/assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <!-- Vendor JS       -->
        <script src="{{asset('admin/assets/vendor/slick/slick.min.js')}}">
        </script>
        <script src="{{asset('admin/assets/vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/animsition/animsition.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
        </script>
        <script src="{{asset('admin/assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/counter-up/jquery.counterup.min.js')}}">
        </script>
        <script src="{{asset('admin/assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/select2/select2.min.js')}}">
        </script>

        <!-- Main JS-->
        <script src="{{asset('admin/assets/js/main.js')}}"></script>
    </body>
</html>