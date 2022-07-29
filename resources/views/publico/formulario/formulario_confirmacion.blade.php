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
      <div class="col-md-3 col-sm-6">
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="row">
            <div class="verifica">
                <div class="col-md-12 col-sm-12">
                    <div class="alert alert-warning" role="alert">Verifica tus datos, Recuerda que los certificados del presente curso tendran esta informacion.</strong></div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="alert alert-success" role="alert">C.I. : {{$datos['ci']}}</div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="alert alert-success" role="alert">E-mail : {{$datos['correo']}}</div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="alert alert-success" role="alert">Datos. : {{$datos['nombre']}} {{$datos['paterno']}} {{$datos['materno']}}</div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="alert alert-success" role="alert">Celular : {{$datos['celular']}}</div>
                </div>
                <div class="col-md-6 col-sm-6">
                    
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="alert alert-success" role="alert">Curso : {{$curso->titulo}}</div>
                </div>
            </div>

          <div class="contact-form">
            @if(session('mensaje_error'))
                <div class="alert alert-danger" role="alert">
                    {{session('mensaje_error')}}
                </div>
            @endif  
            <form action="{{route('agregarEstudiante')}}" method="post">
                @csrf
                <input type="hidden" name="id_persona" value="{{$datos['id_persona']}}">
                <input type="hidden" name="id_estudiante" value="{{$datos['id_estudiante']}}">
                <input type="hidden" name="id_curso" value="{{$curso->id}}">
                
                <input type="hidden" name="ci" value="{{$datos['ci']}}">
                <input type="hidden" name="nombre" value="{{$datos['nombre']}}">
                <input type="hidden" name="paterno" value="{{$datos['paterno']}}">
                <input type="hidden" name="materno" value="{{$datos['materno']}}">
                <input type="hidden" name="correo" value="{{$datos['correo']}}">
                <input type="hidden" name="celular" value="{{$datos['celular']}}">

                <input type="hidden" name="ru" value="{{$datos['ru']}}">
                <input type="hidden" name="profesion" value="{{$datos['profesion']}}">
                <input type="hidden" name="id_grado" value="{{$datos['id_grado']}}">
                <input type="hidden" name="id_carrera" value="{{$datos['id_carrera']}}">
                <input type="hidden" name="id_universidad" value="{{$datos['id_universidad']}}">
                <input type="hidden" name="otra_carrera" value="{{$datos['otra_carrera']}}">
                <input type="hidden" name="otrouniveridad" value="{{$datos['otrouniveridad']}}">
                
                <div class="heading-section col-md-12">
                    <input type="submit" class="btn btn-success btn-block" value="Inscribirme">
                    <a href="{{route('portafolio')}}" class="btn btn-warning btn-block">CANCELAR</a>
                </div>                
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
      </div>
    </div>
</div>
@endsection