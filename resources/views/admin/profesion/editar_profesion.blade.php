@extends('admin.plantillas.admin')

@section('label1')
<div class="row">
    <div class="col-3">
        
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header text-center">
                <h4>{{$titulo2}}</h4>
            </div>
            <div class="card-body">
                @if(session('mensaje'))
                    <div class="alert alert-danger" role="alert">
                        {{session('mensaje')}}
                    </div>
                @endif
                <form action="{{route('updateProfesion')}}" method="post" class="">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id_profesion" value="{{$profesion->id}}">
                    <div class="mb-3 row">
                        <label for="profesion" class="col-4 form-control-label">Nombre de la Profesion</label>
                        <div class="col-8">
                            <input type="text" name="profesion" placeholder="Nombre de la Profesion" class="form-control" required="true" value="{{$profesion->profecion}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <hr>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-success botn-block">
                                <i class="fa fa-save"></i> Actualisar
                            </button>
                        </div>
                        <div class="col-6">
                            <a href="{{route('listaProfesion',$uri)}}" class="btn btn-danger botn-block">
                                <i class="fa fa-times"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-3">
        
    </div>
</div>
@endsection