@extends('admin.plantillas.admin')

@section('label1')
<div class="row">
    <div class="col-lg-2">
        
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4>{{$titulo2}}</h4>
            </div>
            <div class="card-body card-block">
                @if(session('mensaje'))
                    <div class="alert alert-danger" role="alert">
                        {{session('mensaje')}}
                    </div>
                @endif
                <form action="{{route('agregarGrado')}}" method="post" class="">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="grado" class=" form-control-label">Grado Academico</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="nombre" placeholder="Grado Academico" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="corto" class=" form-control-label">Grado Abreviado</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="corto" placeholder="Grado Abreviado" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-md-12">
                            <hr>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fa fa-check"></i> Registrar
                            </button>
                        </div>
                        <div class="col col-md-6">
                            <a href="{{route('listaGrado',$uri)}}" class="btn btn-danger btn-block">
                                <i class="fa fa-close"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                El grado académico corresponde al título perteneciente al Coordinador, dicho título aparecerá en la parte inferior de los certificados.
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        
    </div>
</div>
@endsection