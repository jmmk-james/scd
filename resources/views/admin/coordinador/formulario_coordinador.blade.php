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
                <form action="{{route('agregarCoordinador')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="ci" class="col-4 form-control-label">C.I. : </label>
                        <div class="col-8">
                            <input type="text" name="ci" class="form-control" placeholder="C.I."  required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nombre" class="col-4 form-control-label">Nombre : </label>
                        <div class="col-8">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del Coordinador"  required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="paterno" class="col-4 form-control-label">Apellido Paterno : </label>
                        <div class="col-8">
                            <input type="text" name="paterno" class="form-control" placeholder="Apellido Paterno">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="materno" class="col-4 form-control-label">Apellido Materno : </label>
                        <div class="col-8">
                            <input type="text" name="materno" class="form-control" placeholder="Apellido Materno">
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="grado" class="col-4 form-control-label">Grado Academico : </label>
                        <div class="col-8">
                            <select name="grado" class="form-control" required="true">
                                <option value="">Seleccionar</option>
                                @foreach($grado as $value)
                                <option value="{{$value->id}}">{{$value->nombre}} ({{$value->corto}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="correo" class="col-4 form-control-label">E-mail : </label>
                        <div class="col-8">
                            <input type="email" name="correo" class="form-control" placeholder="Correo" required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="celular" class="col-4 form-control-label">Celular : </label>
                        <div class="col-8">
                            <input type="text" name="celular" class="form-control" placeholder="Celular del coordinador" required="true">
                        </div>
                    </div> 
                    
                    <div class="mb-3 row">
                        <label for="grado" class="col-4 form-control-label">Cargo : </label>
                        <div class="col-8">
                            <select name="tipo" class="form-control" required="true">
                                <option value="">Seleccionar</option>
                                @foreach($tipos as $value)
                                <option value="{{$value->id}}">{{$value->tipo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="firma" class="col-4 form-control-label">Firmar (solo .png) : </label>
                        <div class="col-8">
                            <input type="file" name="firma" class="form-control" accept="image/png" required="true">
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
                            <a href="{{route('listaCoordinador',$uri)}}" class="btn btn-danger botn-block">
                                <i class="fa fa-times"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        
    </div>
</div>
@endsection