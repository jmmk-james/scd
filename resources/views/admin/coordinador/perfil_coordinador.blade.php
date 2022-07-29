@extends('admin.plantillas.admin')

@section('label1')

<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <p>{{$coordinador->nombre}} {{$coordinador->paterno}} {{$coordinador->materno}}</p>
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
                    <label for="coord" class="col-4 form-control-label">Coord :</label>
                    <label for="coord" class="col-8 form-control-label">{{$coordinador->corto}} {{$coordinador->nombre}} {{$coordinador->paterno}} {{$coordinador->materno}}</label>
                </div>

                <div class="mb-3 row">
                    <label for="cargo" class="col-4 form-control-label">Cargo : </label>
                    <label for="cargo" class="col-8 form-control-label">{{$coordinador->tipo}}</label>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-4 form-control-label">E-mail</label>
                    <label for="email" class="col-8 form-control-label">{{$coordinador->correo}}</label>
                </div>

                <div class="mb-3 row">
                    <label for="ci" class="col-4 form-control-label">C.I. : </label>
                    <label for="ci" class="col-8 form-control-label">{{$coordinador->ci}}</label>
                </div>

                <div class="mb-3 row">
                    <label for="celular" class="col-4 form-control-label">Celular : </label>
                    <label for="celular" class="col-8 form-control-label">{{$coordinador->celular}}</label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-7">
        <div class="card">
            <div class="card-header">
                <h4>{{$titulo2}}</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#datos" type="button" role="tab" aria-controls="datos" aria-selected="true">Datos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#editar" type="button" role="tab" aria-controls="editar datos" aria-selected="false">Editar Datos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#coordinador" type="button" role="tab" aria-controls="password" aria-selected="false">Editar Coordinador</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#firma" type="button" role="tab" aria-controls="password" aria-selected="false">Firma</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="datos" role="tabpanel" aria-labelledby="home-tab">
                        <div class="mb-3 row">
                            
                        </div>

                        <div class="mb-3 row">
                            <label for="coord" class="col-4 form-control-label">Coord :</label>
                            <label for="coord" class="col-8 form-control-label">{{$coordinador->corto}} {{$coordinador->nombre}} {{$coordinador->paterno}} {{$coordinador->materno}}</label>
                        </div>

                        <div class="mb-3 row">
                            <label for="cargo" class="col-4 form-control-label">Cargo : </label>
                            <label for="cargo" class="col-8 form-control-label">{{$coordinador->tipo}}</label>
                        </div>
        
                        <div class="mb-3 row">
                            <label for="email" class="col-4 form-control-label">E-mail</label>
                            <label for="email" class="col-8 form-control-label">{{$coordinador->correo}}</label>
                        </div>
        
                        <div class="mb-3 row">
                            <label for="ci" class="col-4 form-control-label">C.I. : </label>
                            <label for="ci" class="col-8 form-control-label">{{$coordinador->ci}}</label>
                        </div>
        
                        <div class="mb-3 row">
                            <label for="celular" class="col-4 form-control-label">Celular : </label>
                            <label for="celular" class="col-8 form-control-label">{{$coordinador->celular}}</label>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="editar" role="tabpanel" aria-labelledby="profile-tab">
                        
                        <form action="{{route('updatePersonaCoordinador')}}" method="post" class="form-horizontal">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id_persona" value="{{$coordinador->id_persona}}">
                            <div class="mb-3 row"><br></div>
                            <div class="mb-3 row">
                                <label for="nombre" class="col-4 form-control-label">Nombre</label>
                                <div class="col-8">
                                    <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{$coordinador->nombre}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="paterno" class="col-4 form-control-label">A. Paterno</label>
                                <div class="col-8">
                                    <input type="text" name="paterno" placeholder="Apellido Paterno" class="form-control" value="{{$coordinador->paterno}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="materno" class="col-4 form-control-label">A. Materno</label>
                                <div class="col-8">
                                    <input type="text" name="materno" placeholder="Apellido Materno" class="form-control" value="{{$coordinador->materno}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="ci" class="col-4 form-control-label">C.I.</label>
                                <div class="col-8">
                                    <input type="text" name="ci" placeholder="C.I." class="form-control" value="{{$coordinador->ci}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="celular" class="col-4 form-control-label">Celular</label>
                                <div class="col-8">
                                    <input type="text" name="celular" placeholder="Celular" class="form-control" value="{{$coordinador->celular}}">
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

                    <div class="tab-pane fade" id="coordinador" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{route('updateCoordinador')}}" method="post" class="form-horizontal">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id_coordinador" value="{{$coordinador->id_coordinador}}">
                            <div class="mb-3 row"><br></div>

                            <div class="mb-3 row">
                                <label for="grado" class="col-4 form-control-label">Grado Academico</label>
                                <div class="col-8">
                                    <select name="grado" class="form-control" required="true">
                                        <option value="{{$coordinador->id_grado}}">Seleccionar</option>
                                        @foreach($grado as $value)
                                        <option value="{{$value->id}}">{{$value->nombre}} ({{$value->corto}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label for="grado" class="col-4 form-control-label">Cargo</label>
                                <div class="col-8">
                                    <select name="tipo" class="form-control" required="true">
                                        <option value="{{$coordinador->id_tipo}}">Seleccionar</option>
                                        @foreach($tipos as $value)
                                        <option value="{{$value->id}}">{{$value->tipo}}</option>
                                        @endforeach
                                    </select>
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

                    <div class="tab-pane fade" id="firma" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{route('updateFirmaCoordinador')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id_coordinador" value="{{$coordinador->id_coordinador}}">
                            <div class="mb-3 row"><br></div>
                            <div class="mb-3 row">
                                <label for="firma" class="col-4 form-control-label">Firmar (solo .png)</label>
                                <div class="col-8">
                                    <input type="file" name="firma" class="form-control" accept="image/png" required="true">
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
@endsection