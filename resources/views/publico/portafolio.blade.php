<!-- Portfolio page -->
<div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <h1 class="fw-light">Talleres, Cursos, Seminarios y Otros.</h1>
      </div>
      <div class="gridder my-3">
      @foreach($curso as $value)
        <div class="grid-item apps wow zoomIn">
            <div class="img-place">
                <img src="{{asset('storage/promo/'.$value->promo)}}" alt="">
                <div class="img-caption">
                    <h5 class="fg-theme">{{$value->titulo}}</h5>
                    <p>Fechas {{$value->fecha}}</p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col col-12 text-center">
                    <a href="#" class="btn btn-theme-outline" >Inscribirme</a>
                </div>
            </div>
        </div>
      @endforeach
      </div>

      <div class="text-center wow fadeInUp">
        <a href="javascript:void(0)" class="btn btn-theme">Ver Mas</a>
      </div>
    </div>
</div> <!-- End Portfolio page -->
