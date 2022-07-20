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
  
  
  <div class="vg-page page-home" id="home" style="background-image: url({{asset('publico/assets/img/bg_image_1.jpg')}})">
    @include('publico.menu')
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <div class="container">
        <div class="row justify-content-center mt-3">
          <div class="col-12 mb-3">
            <h3 class="fw-normal text-center">Sistema de Certificados Digitales </h3>
            <h5>Buscar Certificado</h5>
          </div>
          <div class="col-lg-12">
            <form class="mb-3">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Numero de Certificado" required="true">
                <input type="submit" class="btn btn-theme no-shadow" value="Buscar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- End Caption header -->
  </div>

  @include('publico.portafolio')
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <h1 class="text-center fw-normal wow fadeIn">S.C.D.</h1>
      <h6 class="text-center fw-normal wow fadeIn">Es un sistema de verificación de certificados expedidos por la Nombre Institucion, con la finalidad de:</h6>
    </div>
  </div>

  <div class="vg-page page-funfact" style="background-image: url({{asset('publico/assets/img/bg_banner.jpg')}});">
    <div class="container">
      <div class="row section-counter">
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="768">768</h1>
          <span>Clients</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="230">230</h1>
          <span>Project Compleate</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="97">97</h1>
          <span>Project Ongoing</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="699">699</h1>
          <span>Client Satisfaction</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="vg-page page-service">
    <div class="container">
      <h1 class="fw-normal text-center wow fadeInUp">¿Que Puede Hacer?</h1>
      <div class="row mt-5">

        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-user"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Participantes</h4>
              <p>Permite mantener un registro de personas y validar su participación en los diferentes Eventos realizados por la "Colocar Entidad".</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-files"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Copia Digital</h4>
              <p>Permite guardar una Copia Digital del certificado, para que los participantes puedan descargar el mismo en caso de pérdida.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-save"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Resguardo</h4>
              <p>Los certificados digitales son guardados con diferentes copias con el fin de preservar la participación de las personas en los eventos.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-bar-chart-alt"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Presencia</h4>
              <p>Varias instituciones verifican la valides del certificado que corresponde al participante, además que la Facultad de Humanidades y Ciencias de la Educación respalda y contabiliza los mismos.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-desktop"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Verificación</h4>
              <p>Adaptable para todos los dispositivos y de libre disponibilidad al resto del mundo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-zip"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Código</h4>
              <p>Cada certificado contiene un Número único, evitando las copias fraudulentas por personas malintencionadas dedicadas a la falsificación de los mismos.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
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