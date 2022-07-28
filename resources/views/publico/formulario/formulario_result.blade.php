@extends('publico.plantilla')

@section('label1')

<div class="container">
    <div class="row">
        <div class="heading-section col-md-12 text-center">
            <h2>Resultados del Registro.</h2>
        </div>
    </div>
    <div class="row">
      <div class="heading-section col-md-12 text-center">
        <h2>{{$curso->titulo}}</h2>
        <p>Cupos Disponibles : {{$curso->cupo - $curso->total}}</p>
      </div> <!-- /.heading-section -->
    </div> <!-- /.row -->
    <div class="row">
      <div class="col-md-3 col-sm-6">
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="row">
          <div class="contact-form">
            @if(session('mensaje_error'))
                <div class="alert alert-danger" role="alert">
                    {{session('mensaje_error')}}
                </div>
            @endif  
            @if($inscrito=="si")
            @include('publico.formulario.inscrito')
            @else
            <div class="alert alert-danger" role="alert">
                Cupos Llenos
            </div>
            @endif
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
      </div>
    </div>
</div>
@endsection 