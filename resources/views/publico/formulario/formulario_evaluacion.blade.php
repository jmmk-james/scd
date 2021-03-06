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
            <form action="{{route('formularioBuscar')}}" method="post">
              @csrf
              <input type="hidden" name="id_curso" value="{{$curso->id}}">
              <input type="hidden" name="profesion" value="{{$datos['profesion']}}">
              <div class="heading-section col-md-12">
                <p>Seleccionar Universidad : </p>
                <select  name="universidad" required="true" id="universidad" onchange="selecunversidad()">
                  <option value="">Seleccionar Universidad</option>
                  @foreach($universidad as $value)
                  <option value="{{$value->id}}">{{$value->universidad}}</option>
                  @endforeach
                  <option value="-1">Ninguna</option>
                </select>
                <div id="divotro" style="display: none;">
                  <input type="text" name="otro" value="0" id="otra_universidad" placeholder="Nombre de la Universidad">
                </div>
                <input type="submit" class="mainBtn" value="Siguiente">
                <a href="{{route('portafolio')}}" class="btn btn-warning btn-block">CANCELAR</a>
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