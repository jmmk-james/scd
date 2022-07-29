@extends('admin.plantillas.admin')

@section('label1')

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <p>{{$datos->nombre}} {{$datos->paterno}} {{$datos->materno}}</p>
                @if(session('mensaje'))
                    <div class="alert alert-success" role="alert">
                        {{session('mensaje')}}
                    </div>
                @endif
                @if(session('mensaje_error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('mensaje_error')}}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="nombre" class="col-4 form-control-label">Nombre :</label>
                    <label for="nombre" class="col-8 form-control-label">{{$datos->nombre}}</label>
                </div>
    
                <div class="mb-3 row">
                    <label for="paterno" class="col-4 form-control-label">A. Paterno :</label>
                    <label for="paterno" class="col-8 form-control-label">{{$datos->paterno}}</label>
                </div>
    
                <div class="mb-3 row">
                    <label for="materno" class="col-4 form-control-label">A. Materno :</label>
                    <label for="materno" class="col-8 form-control-label">{{$datos->materno}}</label>
                </div>
    
                <div class="mb-3 row">
                    <label for="email" class="col-4 form-control-label">E-mail :</label>
                    <label for="email" class="col-8 form-control-label">{{$datos->correo}}</label>
                </div>
    
                <div class="mb-3 row">
                    <label for="ci" class="col-4 form-control-label">C.i. :</label>
                    <label for="ci" class="col-8 form-control-label">{{$datos->ci}}</label>
                </div>
    
                <div class="mb-3 row">
                    <label for="ci" class="col-4 form-control-label">Celular :</label>
                    <label for="ci" class="col-8 form-control-label">{{$datos->celular}}</label>
                </div>
                <div class="mb-3 row">
                    <hr>
                </div>
                <div class="mb-3 row">
                    <div class="col-12">
                        <a href="{{route('scd')}}" class="btn btn-warning botn-block"><i class="fa fa-sign-in"></i> Salir</a>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4>{{$titulo2}}</h4>
            </div>
            <div calss="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#datos" type="button" role="tab" aria-controls="datos" aria-selected="true">Datos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#editar" type="button" role="tab" aria-controls="editar datos" aria-selected="false">Editar Datos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Password</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="datos" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card card-body">
                            <div class="mb-3 row">
                                <label for="nombre" class="col-4 form-control-label">Nombre :</label>
                                <label for="nombre" class="col-8 form-control-label">{{$datos->nombre}}</label>
                            </div>
                
                            <div class="mb-3 row">
                                <label for="paterno" class="col-4 form-control-label">A. Paterno :</label>
                                <label for="paterno" class="col-8 form-control-label">{{$datos->paterno}}</label>
                            </div>
                
                            <div class="mb-3 row">
                                <label for="materno" class="col-4 form-control-label">A. Materno :</label>
                                <label for="materno" class="col-8 form-control-label">{{$datos->materno}}</label>
                            </div>
                
                            <div class="mb-3 row">
                                <label for="email" class="col-4 form-control-label">E-mail :</label>
                                <label for="email" class="col-8 form-control-label">{{$datos->correo}}</label>
                            </div>
                
                            <div class="mb-3 row">
                                <label for="ci" class="col-4 form-control-label">C.i. :</label>
                                <label for="ci" class="col-8 form-control-label">{{$datos->ci}}</label>
                            </div>
                
                            <div class="mb-3 row">
                                <label for="celular" class="col-4 form-control-label">Celular :</label>
                                <label for="celular" class="col-8 form-control-label">{{$datos->celular}}</label>
                            </div>
                        </div>
                    </div>
                    <!--Tab Editar Datos-->
                    <div class="tab-pane fade" id="editar" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card card-body">
                            <form action="{{route('updateperfil')}}" method="post" class="form-horizontal">
                                @method('PUT')
                                @csrf

                                <input type="hidden" name="id" value="{{$datos->persona_id}}">
                                <input type="hidden" name="id_usuario" value="{{$datos->usuario_id}}"">

                                <div class="mb-3 row">
                                    <label for="nombre" class="col-4 form-control-label">Nombre : </label>
                                    <div class="col-8">
                                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{$datos->nombre}}" required="true">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="paterno" class="col-4 form-control-label">A. Paterno : </label>
                                    <div class="col-8">
                                        <input type="text" name="paterno" placeholder="Apellido Paterno" class="form-control" value="{{$datos->paterno}}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="materno" class="col-4 form-control-label">A. Materno : </label>
                                    <div class="col-8">
                                        <input type="text" name="materno" placeholder="Apellido Materno" class="form-control" value="{{$datos->materno}}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="ci" class="col-4 form-control-label">C.I. : </label>
                                    <div class="col-8">
                                        <input type="text" name="ci" placeholder="C.I." class="form-control" value="{{$datos->ci}}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="celular" class="col-4 form-control-label">Celular : </label>
                                    <div class="col-8">
                                        <input type="text" name="celular" placeholder="Celular" class="form-control" value="{{$datos->celular}}">
                                    </div>
                                </div>
    
                                <div class="mb-3 row">
                                    <hr>
                                </div>
    
                                <div class="mb-3 row">
                                    <div class="col-4"></div>    
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-success botn-block">
                                            <i class="fa fa-save"></i> Actualizar
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- tab para password-->
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="card card-body">
                            <form action="{{route('updatepass')}}" method="post" class="form-horizontal">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id" value="{{$usuario->usuario_id}}">
                                <input type="hidden" name="id_usuario" value="0">
                                <div class="mb-3 row">
                                    <label for="pass" class="col-4 form-control-label">Password Actual</label>
                                    <div class="col-8">
                                        <input type="password" name="pass" placeholder="Password Actual" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="passn" class="col-4 form-control-label">Nuevo Password</label>
                                    <div class="col-8">
                                        <input type="password" name="passn" placeholder="Nuevo Password" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="passr" class="col-4 form-control-label">Confirmar Password</label>
                                    <div class="col-8">
                                        <input type="password" name="passr" placeholder="Confirmar Nuevo Password" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row"><hr></div>
                                
                                <div class="mb-3 row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-success botn-block">
                                            <i class="fa fa-save"></i> Actualizar
                                        </button>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection