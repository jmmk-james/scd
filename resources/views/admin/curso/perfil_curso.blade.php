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
                        <div class="col col-md-6">Cupo :</div><div class="col col-md-6">{{$curso->cupo}}</div>
                        <div class="col col-md-6">Inscritos :</div><div class="col col-md-6">{{$curso->total}}</div>
                        <div class="col col-md-6">Fecha :</div><div class="col col-md-6">{{$curso->fecha}}</div>
                        <div class="col col-md-6">Estado :</div><div class="col col-md-6">
                            @if ($curso->estado=="ACTIVO")
                            <div class="alert alert-success" role="alert">
                                {{$curso->estado}}
                            </div>
                            @else
                            <div class="alert alert-danger" role="alert">
                                {{$curso->estado}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                    </div>
                    <div class="row">
                        <h4>Coordinadores</h4>
                        <div class="table-responsive table-responsive-data3">
                            <table>
                                <tbody>
                                    <?php $i=0;?>
                                    @foreach($lista_validez as $value)
                                    <?php $i=$i+1;?>
                                    <tr class="tr-shadow">
                                        <td>
                                            {{$value->corto}} {{$value->nombre}} {{$value->paterno}} {{$value->materno}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
                             aria-selected="false">Tipo de Curso</a>
                            <a class="nav-item nav-link" id="nav-firma-tab" data-toggle="tab" href="#nav-firma" role="tab" aria-controls="nav-firma"
                             aria-selected="false">Coordinadores</a>
                        </div>
                    </nav>
                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col col-md-4">ID :</div><div class="col col-md-8">{{$curso->id_curso}}</div>
                                <div class="col col-md-4">Titulo :</div><div class="col col-md-8">{{$curso->titulo}}</div>
                                <div class="col col-md-4">Detalle :</div><div class="col col-md-8">{{$curso->detalle}}</div>
                                <div class="col col-md-4">Carga Horaria :</div><div class="col col-md-8">{{$curso->carga}}</div>
                                <div class="col col-md-4">Cupo :</div><div class="col col-md-8">{{$curso->cupo}}</div>
                                <div class="col col-md-4">Inscritos :</div><div class="col col-md-8">{{$curso->total}}</div>
                                <div class="col col-md-4">Fecha :</div><div class="col col-md-8">{{$curso->fecha}}</div>
                                <div class="col col-md-4">Tipo :</div><div class="col col-md-8">{{$curso->tipo}}</div>
                                <div class="col col-md-4">Estado :</div><div class="col col-md-8">{{$curso->estado}}</div>
                                <div class="col col-md-4">Relevancia :</div><div class="col col-md-8">{{$curso->relevancia}}</div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <form action="{{route('updateCurso')}}" method="post" class="form-horizontal">
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
                                        <input type="number" name="carga" class="form-control" placeholder="Carga Horaria" value="{{$curso->carga}}" required="true">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="cupo" class=" form-control-label">Cupo</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="number" name="cupo" class="form-control" placeholder="Cupo de Inscritos" value="{{$curso->cupo}}" required="true">
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
                                    <div class="col col-md-4">
                                        <label for="estado" class="form-control-label">Estado</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="estado" class="form-control" required="true">
                                            <option value="{{$curso->estado}}">Seleccionar Estado</option>
                                            <option value="ACTIVO">ACTIVO</option>
                                            <option value="CERRADO">CERRADO</option>
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

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <form action="{{route('updateTipoCurso')}}" method="post" class="form-horizontal">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">
                                
                                <div class="row form-group">
                                    <div class="col col-md-6">
                                        <label for="tipo" class=" form-control-label">Tipo</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <select name="id_tipocurso" class="form-control" required="true">
                                            <option value="{{$curso->id_tipo_curso}}">Seleccionar </option>
                                            @foreach($tipoCurso as $value)
                                            <option value="{{$value->id}}">{{$value->tipo}} {{$value->code}}</option>
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
                            <div class="col-md-12">
                                <div class="table-responsive table-responsive-data3">
                                    <table class="table table-data3">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Coordinador</th>
                                                <th>
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticModal">
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0;?>
                                            @foreach($lista_validez as $value)
                                            <?php 
                                                $i=$i+1;
                                                $nuri=array('id_coordinador'=>$value->id_coordinador,'id_curso'=>$curso->id_curso);
                                            ?>
                                            <tr class="tr-shadow">
                                                <td>{{$i}}</td>
                                                <td>
                                                    {{$value->corto}} {{$value->nombre}} {{$value->paterno}} {{$value->materno}} {{$value->cargo}}
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="{{route('eliminarCoordinadorCurso',$nuri)}}" class="item" data-toggle="tooltip" data-placement="top" title="Eliminar Coordinador">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>                            
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <aside class="profile-nav alt">
            <section class="card">
                <div class="card-header">
                    Imagen Promocional
                </div>
                <div class="card-body">
                    <img src="{{asset('storage/promo/'.$curso->promo)}}" width="200px" height="200px">
                    <div class="row"><hr></div>
                    <div class="row">
                        <form action="{{route('updatePromo')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">
                            
                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="promo" class=" form-control-label">Cambiar Promocional</label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="file" name="promo" class="form-control" accept="image/png,image/jpeg" required="true">
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
            </section>
        </aside>
    </div>
    <div class="col-lg-6">
        <aside class="profile-nav alt">
            <section class="card">
                <div class="card-header">
                    Plantilla de Certificado
                </div>
                <div class="card-body">
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="plantilla" class=" form-control-label">Orientacion :</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="plantilla" class=" form-control-label">{{$curso->orientacion}}</label>
                        </div>
                    </div>
                    <img src="{{asset('storage/plantilla/'.$curso->plantilla)}}" width="100px" height="100px">
                    <div class="row"><hr></div>
                    <div class="row">
                        <form action="{{route('updatePlantilla')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">

                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="orientacion" class=" form-control-label">Orientacion del Certificado</label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <select name="orientacion" class="form-control" required="true">
                                        <option value="">Seleccionar Orientacion</option>
                                        <option value="Vertical">Vertical</option>
                                        <option value="Horizontal">Horizontal</option>
                                    </select>                            
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <label for="plantilla" class=" form-control-label">Cambiar Certificado</label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="file" name="plantilla" class="form-control" accept="image/png,image/jpeg" required="true">
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
            </section>
        </aside>
    </div>
</div>
@endsection

@section('label2')
<!-- modal static -->
<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
   <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="staticModalLabel">Adicionar Coordinadores</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
                <form action="{{route('agregarCoordinadorCurso')}}" method="post" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">
                    <div class="row form-group">
                        <div class="col col-md-4">
                            <label for="coordinador" class=" form-control-label">Coordinador</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <select name="id_coordinador" class="form-control">
                                <option value="">Seleccionar</option>
                                @foreach($lista_coordinador as $value)
                                <option value="{{$value->id_coordinador}}">{{$value->corto}} {{$value->nombre}} {{$value->paterno}} {{$value->materno}} : {{$value->tipo}}</option>
                                @endforeach
                            </select>                            
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fa fa-check"></i> Agregar Coordinador
                            </button>
                        </div>
                        <div class="col col-md-6">
                            
                        </div>
                    </div>
                </form>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
           </div>
       </div>
   </div>
</div>
<!-- end modal static -->
@endsection