@extends('publico.plantilla')

@section('label1')

<div class="container">
    <div class="row">
        <div class="heading-section col-md-12 text-center">
            <h2>Formulario de Registro.</h2>
        </div>
    </div>
    <div class="row">
      <div class="heading-section col-md-12 text-center">
        <h2>{{$curso->titulo}}</h2>
        <p>Cupos Disponibles : {{$curso->cupo - $curso->total}}</p>
      </div> <!-- /.heading-section -->
    </div> <!-- /.row -->
    <div class="row">
      <div class="col-md-4 col-sm-6">
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="row">
          <div class="contact-form">
            <form action="{{route('formularioEvaluacion')}}" method="post">
              @csrf
              <input type="text" name="id_curso" value="{{$curso->id}}">
              <div class="heading-section col-md-12">
                <p>Seleccionar Profesión : </p>
                <select  name="profecion" required="true">
                  <option value="">Seleccionar Profesión</option>
                  <option value="ESTUDIANTE">ESTUDIANTE UNIVERSITARIO</option>
                  <option value="PROFECIONAL">PROFECIONAL</option>
                  <option value="OTROS">OTROS</option>
                </select>
                <input type="submit" class="mainBtn" value="Siguiente">
              </div>                
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
      </div>
    </div>
</div>
@endsection