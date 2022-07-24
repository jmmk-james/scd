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
            @if(session('mensaje_error_ci'))
                <div class="alert alert-danger" role="alert">
                    {{session('mensaje_error_ci')}}
                </div>
            @endif
            @if(session('mensaje_error_correo'))
                <div class="alert alert-danger" role="alert">
                    {{session('mensaje_error_correo')}}
                </div>
            @endif  
            <form action="{{route('formularioConfirmar')}}" method="post">
                @csrf
                <input type="hidden" name="id_persona" value="{{$datos['id_persona']}}">
                <input type="hidden" name="id_estudiante" value="{{$datos['id_estudiante']}}">
                <input type="hidden" name="id_curso" value="{{$curso->id}}">
                <input type="hidden" name="profesion" value="{{$datos['profesion']}}">
                <input type="hidden" name="id_universidad" value="{{$datos['id_universidad']}}">
                <input type="hidden" name="otrouniveridad" value="{{$datos['otrouniveridad']}}">
                
                @if($datos['ru']>0)
                <input type="hidden" name="ru" value="{{$datos['ru']}}">
                @else
                <input type="hidden" name="ru" value="0">
                @endif

                <div class="heading-section col-md-12">
                    @if(session('mensaje_error_ci'))
                        <div class="alert alert-danger" role="alert">
                            {{session('mensaje_error_ci')}}
                        </div>
                    @endif 
                    @if($datos['ci']==0)
                    <p>C.I. </p> Ejemplo : 38758478lp
                    <input type="text" name="ci" placeholder="Cedula de Identidad  -  Ejemplo : 38758478lp" required="true">
                    @else
                    <div class="alert alert-success" role="alert"><p>C.I. : {{$datos['ci']}}</p></div>
                    <input type="hidden" name="ci" value="{{$datos['ci']}}">
                    @endif 

                    <p>Nombres :</p>
                    <input type="text" name="nombre" placeholder="Nombres " required="true">
                    
                    <p>A. Paterno :</p>
                    <input type="text" name="paterno" placeholder="Apellido Paterno">
                    
                    <p>A. Materno :</p>
                    <input type="text" name="materno" placeholder="Apellido Materno">
                    
                    @if(session('mensaje_error_correo'))
                        <div class="alert alert-danger" role="alert">
                            {{session('mensaje_error_correo')}}
                        </div>
                    @endif
                    <p>E-mail :</p>
                    <input type="email" name="correo" placeholder="E-mail" required="true">
                    
                    <p>Celular :</p>
                    <input type="number" name="celular" placeholder="Celular" required="true" minlength="8">

                    @if($datos['profesion']=="Profesional")
                    <p>Grado Académico :</p>
                    <select name="id_grado" required="true">
                        <option value="">Seleccionar Grado Académico</option>
                        @for($i=2;$i<count($grado); $i++)
                        <option value="{{$grado[$i]['id']}}">{{$grado[$i]['nombre']}}</option>
                        @endfor
                    </select>
                    <input type="hidden" name="id_carrera" value="1">
                    <input type="hidden" name="otra_carrera" value="0">
                    
                    @else
                    
                      @if($datos['profesion']=="Estudiante Universitario")
                      <input type="hidden" name="id_grado" value="2">
                      <select name="id_carrera"  required="true" id="carrera" onchange="seleccarrera()">
                          <option value="">Seleccionar Carrera</option>
                          @for($i=1;$i<count($carrera); $i++)
                          <option value="{{$carrera[$i]['id']}}">{{$carrera[$i]['carrera']}}</option>
                          @endfor
                          <option value="-1">Otra Carrera</option>
                      </select>
                      <div id="divotrocarrera" style="display: none;">
                          <input type="text" name="otra_carrera" value="0" id="otra_carrera" placeholder="Nombre de la Carrera">
                      </div>
                      @else
                      <input type="hidden" name="id_grado" value="1">
                      <input type="hidden" name="id_carrera" value="1">
                      <input type="hidden" name="otra_carrera" value="0">
                      @endif
                    @endif
                </div>
                <div class="heading-section col-md-12">
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