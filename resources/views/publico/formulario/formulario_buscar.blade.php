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
            @if(session('mensaje_error'))
                <div class="alert alert-danger" role="alert">
                    {{session('mensaje_error')}}
                </div>
            @endif  
            <form action="{{route('formularioFormulario')}}" method="post">
                @csrf
                <input type="hidden" name="id_curso" value="{{$curso->id}}">
                <input type="hidden" name="profesion" value="{{$datos['profesion']}}">
                <input type="hidden" name="id_universidad" value="{{$datos['id_universidad']}}">
                <input type="hidden" name="otrouniveridad" value="{{$datos['otrouniveridad']}}">
                <div class="heading-section col-md-12">
                    @if($datos['id_universidad']==1)
                    <p>Registro Universitario : </p>
                    <input type="text" name="ru" placeholder="Resgistro Universitario" maxlength="7" minlength="7" required="true">
                    <p>Confirmar Registro Universitario : </p>
                    <input type="text" name="ru2" placeholder="Resgistro Universitario" maxlength="7" minlength="7" required="true">
                    @else
                    <p>Celula  de Identidad</p> Ejemplo : 8475857lp
                    <input type="text" name="ci" placeholder="Cedula de Identidad Ejemplo : 8475857lp" minlength="6" required="true">
                    <p>Confirmar Celula  de Identidad</p> Ejemplo : 8475857lp
                    <input type="text" name="ci2" placeholder="Cedula de Identidad Ejemplo : 8475857lp" minlength="6" required="true">
                    @endif
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