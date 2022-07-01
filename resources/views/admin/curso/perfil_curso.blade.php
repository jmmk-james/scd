@extends('admin.plantillas.admin')

@section('label1')

<div class="row">
    <div class="col-lg-4">
        <aside class="profile-nav alt">
            <section class="card">
                <div class="card-header user-header alt bg-dark">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="text-light display-6">{{$curso->titulo}}</h4>
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

                <div class="card-body">
                    <div class="row">
                        <div class="col col-md-6">ID :</div><div class="col col-md-6">{{$curso->id_curso}}</div>
                        <div class="col col-md-6">Tipo :</div><div class="col col-md-6">{{$curso->tipo}}</div>
                        <div class="col col-md-6">Codigo :</div><div class="col col-md-6">{{$curso->code}}</div>
                        <div class="col col-md-6">C. Horaria :</div><div class="col col-md-6">{{$curso->carga}}</div>
                        <div class="col col-md-6">Fecha :</div><div class="col col-md-6">{{$curso->fecha}}</div>
                    </div>
                </div>

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
                            <div class="row">
                                <div class="col col-md-4">ID :</div><div class="col col-md-8">{{$curso->id_curso}}</div>
                                <div class="col col-md-4">Titulo :</div><div class="col col-md-8">{{$curso->titulo}}</div>
                                <div class="col col-md-4">Detalle :</div><div class="col col-md-8">{{$curso->detalle}}</div>
                                <div class="col col-md-4">Carga Horaria :</div><div class="col col-md-8">{{$curso->carga}}</div>
                                <div class="col col-md-4">Fecha :</div><div class="col col-md-8">{{$curso->fecha}}</div>
                                <div class="col col-md-4">Tipo :</div><div class="col col-md-8">{{$curso->tipo}}</div>
                                <div class="col col-md-4">Relevancia :</div><div class="col col-md-8">{{$curso->relevancia}}</div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <form action="{{route('updatePersonaCoordinador')}}" method="post" class="form-horizontal">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="titulo" class=" form-control-label">Titulo</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" name="titulo" class="form-control" placeholder="Titulo"  required="true" value="{{$curso->titulo}}">
                                    </div>
                                </div>
            
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="detalle" class=" form-control-label">Detalle</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <textarea name="detalle" class="form-control" placeholder="Detalle"  required="true">{{$curso->detalle}}</textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="carga" class=" form-control-label">Carga Horaria</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" name="carga" class="form-control" placeholder="Carga Horaria" value="{{$curso->carga}}" required="true">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="fecha" class=" form-control-label">Fecha</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="date" name="fecha" class="form-control" required="true" value="{{$curso->fecha}}">
                                    </div>
                                </div>
            
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="relevancia" class=" form-control-label">Relevancia</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <textarea name="relevancia" class="form-control" placeholder="Relevancia"  required="true">{{$curso->relevancia}}</textarea>
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
                                <input type="hidden" name="id_coordinador" value="">
                                
                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <label for="grado" class="form-control-label">Grado Academico</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <select name="grado" class="form-control" required="true">
                                            <option value="">Seleccionar</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <label for="grado" class="form-control-label">Cargo</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <select name="tipo" class="form-control" required="true">
                                            <option value="">Seleccionar</option>
                                            
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
                                <input type="hidden" name="id_coordinador" value="">
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