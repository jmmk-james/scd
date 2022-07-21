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
            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
                      <ul class="slides">
                        <li>
                            <div class="overlay"></div>
                            <img src="{{asset('publico/assets/images/slide1.jpg')}}" alt="">
                            <div class="slider-caption visible-md visible-lg">
                              <p>Buscar Codigo de Certificado.</p>
                              <div class="heading-section col-md-12 text-center">
                                <div class="contact-form">
                                  <form method="post" >
                                    <div class="col-md-2"></div>
                                    <div class="col-md-6">
                                      <input type="text" name="codigo" required="true" placeholder="Codigo de Certificado.">
                                    </div>
                                    <div class="col-md-2">
                                      <input type="submit" class="btn btn-danger" value="Buscar">
                                    </div>
                                    <div class="col-md-2"></div>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </li>
                      </ul>
                    </div> <!-- /.flexslider -->
                </div> <!-- /.slider -->
            </div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->

        <div class="content-section">
            @include('publico.portafolio')
        </div> <!-- /#portfolio -->

        <div class="content-section">
          <div class="container">
            <div class="row">
                <div class="heading-section col-md-12 text-center">
                    <h2>S.C.D.</h2>
                    <p>Es un sistema de verificación de certificados expedidos por la "Nombre Institucion".</p>
                </div> <!-- /.heading-section -->
            </div> <!-- /.row -->
            <div class="row">
              <div class="heading-section col-md-12 text-center">
                <p>¿Que Puede Hacer?</p>
              </div>
              
              <div class="col-md-4">
                <div class="heading-section col-md-12 text-center">
                  <div class="service-icon-port">
                    <i class="fa fa-users"></i>
                  </div>
                  <p>Participantes</p>
                  Permite mantener un registro de personas y validar su participación en los diferentes Eventos realizados por la "Colocar Entidad".
                </div>
                
              </div>

              <div class="col-md-4">
                <div class="heading-section col-md-12 text-center">
                  <div class="service-icon-port">
                    <i class="fa fa-copy"></i>
                  </div>
                  <p>Copia Digital</p>
                  Permite guardar una Copia Digital del certificado, para que los participantes puedan descargar el mismo en caso de pérdida.
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="heading-section col-md-12 text-center">
                  <div class="service-icon-port">
                    <i class="fa fa-save"></i>
                  </div>
                  <p>Resguardo</p>
                  Los certificados digitales son guardados con diferentes copias con el fin de preservar la participación de las personas en los eventos.
                </div>
              </div>

              <div class="col-md-4">
                <div class="heading-section col-md-12 text-center">
                  <div class="service-icon-port">
                    <i class="fa fa-desktop"></i>
                  </div>
                  <p>Presencia</p>
                  Varias instituciones verifican la valides del certificado que corresponde al participante, además que la Facultad de Humanidades y Ciencias de la Educación respalda y contabiliza los mismos.
                </div>
              </div>

              <div class="col-md-4">
                <div class="heading-section col-md-12 text-center">
                  <div class="service-icon-port">
                    <i class="fa fa-tablet"></i>
                  </div>
                  <p>Adaptabilidad</p>
                  Adaptable para todos los dispositivos y de libre disponibilidad al resto del mundo.
                </div>
              </div>

              <div class="col-md-4">
                <div class="heading-section col-md-12 text-center">
                  <div class="service-icon-port">
                    <i class="fa fa-qrcode"></i>
                  </div>
                  <p>Código</p>
                  Cada certificado contiene un Número único, evitando las copias fraudulentas por personas malintencionadas dedicadas a la falsificación de los mismos.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content-section" id="our-team">
            @include('publico.testimonial')
        </div> <!-- /#our-team -->
            
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