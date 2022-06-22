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
                <form action="{{route('updateCarrera')}}" method="post" class="">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id_carrera" value="{{$carrera->id}}">
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="ci" class=" form-control-label">Nombre de la Carrera</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="nombre" placeholder="Nombre de la Carrera" class="form-control" required="true" value="{{$carrera->nombre}}">
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
                                <i class="fa fa-check"></i> Actualisar
                            </button>
                        </div>
                        <div class="col col-md-6">
                            <a href="{{route('listaCarrera')}}" class="btn btn-danger btn-block">
                                <i class="fa fa-close"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                Carrera = {{$carrera->nombre}}, Estado = {{$carrera->estado}}, Id Carrera = {{$carrera->id}} .
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        
    </div>
</div>
@endsection