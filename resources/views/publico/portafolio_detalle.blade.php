@extends('publico.plantilla')

@section('label1')
<!-- Blog -->
<div class="vg-page page-blog">
    <div class="container">
        <h1 class="text-center fw-normal wow fadeInUp">Talleres, Cursos, Seminarios y Otros.</h1>
        <div class="row post-grid">
            @foreach($curso as $value)
            <div class="col-md-6 col-lg-4 wow fadeInUp">
                <div class="card">
                    <div class="img-place">
                        <img src="{{asset('storage/promo/'.$value->promo)}}" alt="">
                    </div>
                    <div class="caption">
                        <a href="javascript:void(0)" class="post-category">Tipo : {{$value->tipo}}</a>
                        <a href="#" class="post-title">{{$value->titulo}}</a>
                        <span class="post-date"><span class="sr-only">Fecha </span>Fecha:  {{$value->fecha}}</span>
                        <span class="post-date"><span class="sr-only">Fecha </span>Cupo : {{$value->cupo}}</span>
                    </div>
                    <div class="col col-12 text-center">
                        <a href="#" class="btn btn-theme-outline" >Inscribirme</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </div> <!-- End blog -->
@endsection