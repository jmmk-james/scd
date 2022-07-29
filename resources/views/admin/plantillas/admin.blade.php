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
        <link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('publico/assets/css/font-awesome.css')}}">
    </head>

    <body>
        @include('admin.plantillas.cabesera')
        <div class="container">
            <div class="row">
                <div class="escritorio">
                @yield('label1')
                </div>
            </div>
        </div>
        <!-- Bootstrap JS-->
        <script src="{{asset('admin/assets/js/bootstrap.js')}}"></script>
    </body>
</html>