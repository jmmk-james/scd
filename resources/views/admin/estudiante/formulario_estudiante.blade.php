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
                <form action="{{route('agregarEstudiante')}}" method="post" class="">
                    @csrf
                    <div class="mb-3 row">
                        <label for="ci" class="col-4 form-control-label">C.I.</label>
                        <div class="col-8">
                            <input type="text" name="ci" placeholder="C.I." class="form-control" required="true">
                            @if(session('mensaje_ci'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('mensaje_ci')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nombre" class="col-4 form-control-label">Nombre</label>
                        <div class="col-8">
                            <input type="text" name="nombre" placeholder="Nombre" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="paterno" class="col-4 form-control-label">Apellido Paterno</label>
                        <div class="col-8">
                            <input type="text" name="paterno" placeholder="Apellido Paterno" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="materno" class="col-4 form-control-label">Apellido Materno</label>
                        <div class="col-8">
                            <input type="text" name="materno" placeholder="Apellido Materno" class="form-control">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="celular" class="col-4 form-control-label">Celular</label>
                        <div class="col-8">
                            <input type="text" name="celular" placeholder="Celular" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="correo" class="col-4 form-control-label">E-mail</label>
                        <div class="col-8">
                            <input type="email" name="correo" placeholder="E-mail" class="form-control" required="true">
                            @if(session('mensaje_correo'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('mensaje_correo')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="tipo" class="col-4 form-control-label">R.U.</label>
                        <div class="col-8">
                            <input type="number" name="ru" placeholder="Registro Universitario" class="form-control" value="0" required ="true">
                            @if(session('mensaje_ru'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('mensaje_ru')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tipo" class="col-4 form-control-label">Profesion</label>
                        <div class="col-8">
                            <select  name="profesion" class="form-control">
                                <option value="">Seleccionar Profesion</option>
                                @foreach($profesion as $value)
                                <option value="{{$value->profecion}}">{{$value->profecion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tipo" class="col-4 form-control-label">Grado</label>
                        <div class="col-8">
                            <select  name="id_grado" class="form-control">
                                <option value="">Seleccionar Grado</option>
                                @foreach($grado as $value)
                                <option value="{{$value->id}}">{{$value->nombre}} {{$value->corto}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tipo" class="col-4 form-control-label">Carrera</label>
                        <div class="col-8">
                            <select  name="id_carrera" class="form-control">
                                <option value="">Seleccionar Carrera</option>
                                @foreach($carrera as $value)
                                <option value="{{$value->id}}">{{$value->carrera}}</option>
                                @endforeach
                                <option value="-1">Ninguna</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tipo" class="col-4 form-control-label">Universidad</label>
                        <div class="col-8">
                            <select  name="id_universidad" class="form-control">
                                <option value="">Seleccionar Universidad</option>
                                @foreach($universidad as $value)
                                <option value="{{$value->id}}">{{$value->universidad}}</option>
                                @endforeach
                                <option value="-1">Ninguna</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-success btn-lg botn-block">
                                <i class="fa fa-floppy-o"></i> Registrar
                            </button>
                        </div>
                        <div class="col-6">
                            <a href="{{route('listaEstudiante',$uri)}}" class="btn btn-danger btn-lg botn-block">
                                <i class="fa fa-times"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
    <div class="col-3">
        
    </div>
</div>

@endsection