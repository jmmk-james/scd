@extends('admin.plantillas.admin')

@section('label1')

<div class="row">
    <div class="col-lg-4">
        <aside class="profile-nav alt">
            <section class="card">
                <div class="card-header user-header alt bg-dark">
                    <div class="media">
                        <a href="#">
                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{asset('admin/assets/images/icon/avatar-01.png')}}">
                        </a>
                        <div class="media-body">
                            <h2 class="text-light display-6">{{$coordinador->nombre}} {{$coordinador->paterno}} {{$coordinador->materno}}</h2>
                            
                        </div>
                    </div>
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


                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="#">Cord. : </a> {{$coordinador->corto}} {{$coordinador->nombre}} {{$coordinador->paterno}} {{$coordinador->materno}}
                    </li>
                    <li class="list-group-item">
                        <a href="#">Cargo : </a> {{$coordinador->tipo}}
                    </li>
                    <li class="list-group-item">
                        <a href="#">E-mail : </a> {{$coordinador->correo}}
                    </li>
                    <li class="list-group-item">
                        <a href="#">C.i. : </a> {{$coordinador->ci}}
                    </li>
                    <li class="list-group-item">
                        <a href="#">Celular : </a> {{$coordinador->celular}}
                    </li>
                </ul>

            </section>
        </aside>
    </div>
    
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4>{{$titulo2}}</h4>
            </div>
            <div class="card-body">
                <div class="default-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                             aria-selected="true">Datos</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
                             aria-selected="false">Editar Datos</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                             aria-selected="false">Editar Coordinador</a>
                            <a class="nav-item nav-link" id="nav-firma-tab" data-toggle="tab" href="#nav-firma" role="tab" aria-controls="nav-firma"
                             aria-selected="false">Firma</a>
                        </div>
                    </nav>
                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#">Cord. : </a> {{$coordinador->corto}} {{$coordinador->nombre}} {{$coordinador->paterno}} {{$coordinador->materno}}
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Cargo : </a> {{$coordinador->tipo}}
                                </li>
                                <li class="list-group-item">
                                    <a href="#">E-mail : </a> {{$coordinador->correo}}
                                </li>
                                <li class="list-group-item">
                                    <a href="#">C.i. : </a> {{$coordinador->ci}}
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Celular : </a> {{$coordinador->celular}}
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <form action="{{route('updatePersonaCoordinador')}}" method="post" class="form-horizontal">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id_persona" value="{{$coordinador->id_persona}}">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="nombre" class=" form-control-label">Nombre</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{$coordinador->nombre}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="paterno" class=" form-control-label">A. Paterno</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="paterno" placeholder="Apellido Paterno" class="form-control" value="{{$coordinador->paterno}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="materno" class=" form-control-label">A. Materno</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="materno" placeholder="Apellido Materno" class="form-control" value="{{$coordinador->materno}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="ci" class=" form-control-label">C.I.</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="ci" placeholder="C.I." class="form-control" value="{{$coordinador->ci}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="celular" class=" form-control-label">Celular</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="celular" placeholder="Celular" class="form-control" value="{{$coordinador->celular}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <button type="submit" class="btn btn-success btn-block">
                                            <i class="fa fa-check"></i> Actualizar
                                        </button>
                                    </div>
                                    <div class="col col-md-6">
                                        
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <form action="{{route('updateCoordinador')}}" method="post" class="form-horizontal">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id_coordinador" value="{{$coordinador->id_coordinador}}">
                                
                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <label for="grado" class="form-control-label">Grado Academico</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <select name="grado" class="form-control" required="true">
                                            <option value="{{$coordinador->id_grado}}">Seleccionar</option>
                                            @foreach($grado as $value)
                                            <option value="{{$value->id}}">{{$value->nombre}} ({{$value->corto}})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <label for="grado" class="form-control-label">Cargo</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <select name="tipo" class="form-control" required="true">
                                            <option value="{{$coordinador->id_tipo}}">Seleccionar</option>
                                            @foreach($tipos as $value)
                                            <option value="{{$value->id}}">{{$value->tipo}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <button type="submit" class="btn btn-success btn-block">
                                            <i class="fa fa-check"></i> Actualizar
                                        </button>
                                    </div>
                                    <div class="col col-md-6">
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    

                        <div class="tab-pane fade" id="nav-firma" role="tabpanel" aria-labelledby="nav-firma-tab">
                            <form action="{{route('updateFirmaCoordinador')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id_coordinador" value="{{$coordinador->id_coordinador}}">
                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <label for="firma" class=" form-control-label">Firmar (solo .png)</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="file" name="firma" class="form-control" accept="image/png" required="true">
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <button type="submit" class="btn btn-success btn-block">
                                            <i class="fa fa-check"></i> Actualizar
                                        </button>
                                    </div>
                                    <div class="col col-md-6">
                                        
                                    </div>
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