<div class="container">
  <div class="row">
    <div class="heading-section col-md-12 text-center">
      <h2>Talleres, Cursos, Seminarios y Otros.</h2>
      <p>Certificados Digitales.</p>
    </div> <!-- /.heading-section -->
  </div> <!-- /.row -->
  <div class="row">
    @foreach($curso as $value)
    <div class="portfolio-item col-md-3 col-sm-6">
      <div class="portfolio-thumb">
          <img src="{{asset('storage/promo/'.$value->promo)}}" alt="">
          <div class="portfolio-overlay">
              <h3>{{$value->titulo}}</h3>
              <p>Fecha : {{$value->fecha}}</p>
          </div> <!-- /.portfolio-overlay -->
      </div> <!-- /.portfolio-thumb --> 
      <div class="contact-form">
        <br>
        <a href="{{route('formulario',$value->id)}}" class="btn btn-danger btn-block">Inscribirme</a>
      </div>
    </div> <!-- /.portfolio-item -->
    @endforeach
  </div>
</div>