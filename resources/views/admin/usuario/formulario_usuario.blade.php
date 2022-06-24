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
                <form action="{{route('AgregarUsuario')}}" method="post" class="">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="ci" class=" form-control-label">C.I.</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="ci" placeholder="C.I." class="form-control" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="nombre" class=" form-control-label">Nombre</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="nombre" placeholder="Nombre" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="paterno" class=" form-control-label">Apellido Paterno</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="paterno" placeholder="Apellido Paterno" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="materno" class=" form-control-label">Apellido Materno</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="materno" placeholder="Apellido Materno" class="form-control">
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="celular" class=" form-control-label">Celular</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="celular" placeholder="Celular" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="correo" class=" form-control-label">E-mail</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="correo" placeholder="E-mail" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="tipo" class=" form-control-label">Tipo</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="tipo" class="form-control" required>
                                <option value="">Seleccionar Tipo</option>
                                <option value="1">Administrador</option>
                                <option value="2">Responsable - Coordinador</option>
                                <option value="3">Registro</option>
                            </select>
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
                            <a href="{{route('listaUsuario',$uri)}}" class="btn btn-danger btn-block">
                                <i class="fa fa-close"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                El Correo registrado sera el nombre de Usuario y el Password el numero de Celular correspondiente.
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        
    </div>
</div>
@endsection