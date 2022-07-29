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
                <form action="{{route('agregarTipoCurso')}}" method="post" class="">
                    @csrf
                    <div class="mb-3 row">
                        <label for="tipo" class="col-4 form-control-label">Tipo de Curso</label>
                        <div class="col-8">
                            <input type="text" name="tipo" placeholder="Tipo de Curso" class="form-control" required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="code" class="col-4 form-control-label">Codigo</label>
                        <div class="col-8">
                            <input type="text" name="code" placeholder="Codigo solo 5 dígitos" class="form-control" required="true" maxlength="5">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <hr>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-success botn-block">
                                <i class="fa fa-save"></i> Registrar
                            </button>
                        </div>
                        <div class="col-6">
                            <a href="{{route('listaTipoCurso',$uri)}}" class="btn btn-danger botn-block">
                                <i class="fa fa-times"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        
    </div>
</div>
@endsection