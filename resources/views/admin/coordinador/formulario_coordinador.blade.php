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
                <form action="{{route('agregarCoordinador')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="ci" class=" form-control-label">C.I.</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="ci" class="form-control" placeholder="C.I."  required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="nombre" class=" form-control-label">Nombre</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del Coordinador"  required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="paterno" class=" form-control-label">Apellido Paterno</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="paterno" class="form-control" placeholder="Apellido Paterno">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="materno" class=" form-control-label">Apellido Materno</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="materno" class="form-control" placeholder="Apellido Materno">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="grado" class="form-control-label">Grado Academico</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="grado" class="form-control" required="true">
                                <option value="">Seleccionar</option>
                                @foreach($grado as $value)
                                <option value="{{$value->id}}">{{$value->nombre}} ({{$value->corto}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="correo" class=" form-control-label">E-mail</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="correo" class="form-control" placeholder="Correo" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="celular" class=" form-control-label">Celular</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="celular" class="form-control" placeholder="Celular del coordinador" required="true">
                        </div>
                    </div> 
                    
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="grado" class="form-control-label">Cargo</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="tipo" class="form-control" required="true">
                                <option value="">Seleccionar</option>
                                @foreach($tipos as $value)
                                <option value="{{$value->id}}">{{$value->tipo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="firma" class=" form-control-label">Firmar (solo .png)</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="file" name="firma" class="form-control" accept="image/png" required="true">
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
                            <a href="{{route('listaTipo',$uri)}}" class="btn btn-danger btn-block">
                                <i class="fa fa-close"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                El Tipo de Coordinacion  Registrado es automaticamente Activada para la seleccion del mismo.
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        
    </div>
</div>
@endsection