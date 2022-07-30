@extends('admin.plantillas.admin')

@section('label1')

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                {{$curso->titulo}}
            </div>
            <div class="card-body">
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
                <div class="mb-2 row">
                    <label for="id" class="col-4 form-control-label">ID :</label>
                    <label for="id" class="col-8 form-control-label">{{$curso->id_curso}}</label>
                </div>

                <div class="mb-2 row">
                    <label for="tipo" class="col-4 form-control-label">Tipo :</label>
                    <label for="tipo" class="col-8 form-control-label">{{$curso->tipo}}</label>                    
                </div>

                <div class="mb-2 row">
                    <label for="code" class="col-4 form-control-label">Codigo :</label>
                    <label for="code" class="col-8 form-control-label">{{$curso->code}}</label>
                </div>

                <div class="mb-2 row">
                    <label for="carga" class="col-4 form-control-label">C. Horaria :</label>
                    <label for="carga" class="col-8 form-control-label">{{$curso->carga}}</label>
                </div>

                <div class="mb-2 row">
                    <label for="cupo" class="col-4 form-control-label">Cupo :</label>
                    <label for="cupo" class="col-8 form-control-label">{{$curso->cupo}}</label>
                </div>

                <div class="mb-2 row">
                    <label for="total" class="col-4 form-control-label">Inscritos :</label>
                    <label for="total" class="col-8 form-control-label">{{$curso->total}}</label>
                </div>

                <div class="mb-2 row">
                    <label for="fecha" class="col-4 form-control-label">Fecha :</label>
                    <label for="fecha" class="col-8 form-control-label">{{$curso->fecha}}</label>
                </div>

                <div class="mb-2 row">
                    <label for="estado" class="col-4 form-control-label">Estado :</label>
                    <label for="estado" class="col-8 form-control-label">
                        @if ($curso->estado=="ACTIVO")
                        <div class="badge bg-success">
                            {{$curso->estado}}
                        </div>
                        @else
                        <div class="badge bg-danger" role="alert">
                            {{$curso->estado}}
                        </div>
                        @endif
                    </label>
                </div>
                
            </div>
            <div class="card-footer">
                <h5>Coordinadores</h5>
                <div class="mb-3 row">
                    <table class="table table-hover">
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
    </div>
    
    <div class="col-8">
        <div class="card">
            <div class="card-header text-center">
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
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tipo" type="button" role="tab" aria-controls="tipo de curso" aria-selected="false">Tipo de Curso</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#coordinador" type="button" role="tab" aria-controls="cordinadores" aria-selected="false">Coordinadores</button>
                      </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="datos" role="tabpanel" aria-labelledby="home-tab">
                        <div class="mb-4 row"></div>
                        <div class="mb-2 row">
                            <label for="id" class="col-4 form-control-label">ID :</label>
                            <label for="id" class="col-8 form-control-label">{{$curso->id_curso}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="titulo" class="col-4 form-control-label">Titulo :</label>
                            <label for="titulo" class="col-8 form-control-label">{{$curso->titulo}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="detalle" class="col-4 form-control-label">Detalle :</label>
                            <label for="detalle" class="col-8 form-control-label">{{$curso->detalle}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="carga" class="col-4 form-control-label">Carga Horaria :</label>
                            <label for="carga" class="col-8 form-control-label">{{$curso->carga}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="cupo" class="col-4 form-control-label">Cupo :</label>
                            <label for="cupo" class="col-8 form-control-label">{{$curso->cupo}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inscrito" class="col-4 form-control-label">Inscritos :</label>
                            <label for="inscrito" class="col-8 form-control-label">{{$curso->total}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="fecha" class="col-4 form-control-label">Fecha :</label>
                            <label for="fecha" class="col-8 form-control-label">{{$curso->fecha}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="tipo" class="col-4 form-control-label">Tipo :</label>
                            <label for="tipo" class="col-8 form-control-label">{{$curso->tipo}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="estado" class="col-4 form-control-label">Estado :</label>
                            <label for="estado" class="col-8 form-control-label">{{$curso->estado}}</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="relevancia" class="col-4 form-control-label">Relevancia :</label>
                            <label for="relevancia" class="col-8 form-control-label">{{$curso->relevancia}}</label>
                        </div>    
                    </div><!--Datos-->

                    <div class="tab-pane fade" id="editar" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{route('updateCurso')}}" method="post" class="form-horizontal">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">
                            <div class="mb-4 row"></div>

                            <div class="mb-3 row">
                                <label for="titulo" class="col-4 form-control-label">Titulo</label>
                                <div class="col-8">
                                    <input type="text" name="titulo" class="form-control" placeholder="Titulo"  required="true" value="{{$curso->titulo}}">
                                </div>
                            </div>
        
                            <div class="mb-3 row">
                                <label for="detalle" class="col-4 form-control-label">Detalle</label>
                                <div class="col-8">
                                    <textarea name="detalle" class="form-control" placeholder="Detalle"  required="true">{{$curso->detalle}}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="carga" class="col-4 form-control-label">Carga Horaria</label>
                                <div class="col-8">
                                    <input type="number" name="carga" class="form-control" placeholder="Carga Horaria" value="{{$curso->carga}}" required="true">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="cupo" class="col-4 form-control-label">Cupo</label>
                                <div class="col-8">
                                    <input type="number" name="cupo" class="form-control" placeholder="Cupo de Inscritos" value="{{$curso->cupo}}" required="true">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="fecha" class="col-4 form-control-label">Fecha</label>
                                <div class="col-8">
                                    <input type="date" name="fecha" class="form-control" required="true" value="{{$curso->fecha}}">
                                </div>
                            </div>
        
                            <div class="mb-3 row">
                                <label for="relevancia" class="col-4 form-control-label">Relevancia</label>
                                <div class="col-8">
                                    <textarea name="relevancia" class="form-control" placeholder="Relevancia"  required="true">{{$curso->relevancia}}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="estado" class="col-4 form-control-label">Estado</label>
                                <div class="col-8">
                                    <select name="estado" class="form-control" required="true">
                                        <option value="{{$curso->estado}}">Seleccionar Estado</option>
                                        <option value="ACTIVO">ACTIVO</option>
                                        <option value="CERRADO">CERRADO</option>
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
                    </div><!--Editar Datos-->
                    
                    <div class="tab-pane fade" id="tipo" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{route('updateTipoCurso')}}" method="post" class="form-horizontal">
                            @method('PUT')
                            @csrf
                            <div class="mb-4 row"></div>
                            <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">
                            
                            <div class="mb-3 row">
                                <label for="tipo" class="col-4 form-control-label">Tipo</label>
                                <div class="col-8">
                                    <select name="id_tipocurso" class="form-control" required="true">
                                        <option value="{{$curso->id_tipo_curso}}">Seleccionar </option>
                                        @foreach($tipoCurso as $value)
                                        <option value="{{$value->id}}">{{$value->tipo}} {{$value->code}}</option>
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
                    </div><!--Tipo de Cursos-->
                    
                    <div class="tab-pane fade" id="coordinador" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="mb-4 row"></div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Coordinador</th>
                                    <th>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCoordinador">
                                            <i class="fa fa-plus"></i>
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
                                            <a href="{{route('eliminarCoordinadorCurso',$nuri)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Coordinador">
                                                <i class="fa fa-trash-o"></i>
                                            </a>                            
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!--Corrdinadores-->
                </div><!--Tab Content-->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="escritorio"></div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header text-center"><h3>Promocional</h3></div>
            <div class="card-body">
                <img src="{{asset('storage/promo/'.$curso->promo)}}" width="200px" height="200px">
                <div class="mb-4 row"></div>

                <div class="mb-4 row">
                    <form action="{{route('updatePromo')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">
                            
                        <div class="mb-3 row">
                            <label for="promo" class="col-4 form-control-label">Cambiar Promocional</label>
                            <div class="col-8">
                                <input type="file" name="promo" class="form-control" accept="image/png,image/jpeg" required="true">
                            </div>
                        </div>
                        
                        <div class="mb-3 row"><hr> </div>

                        <div class="mb-3 row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success botn-block">
                                    <i class="fa fa-save"></i> Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-header text-center"><h3>Plantilla de Certificado</h3></div>
            <div class="card-body">

                <div class="mb-3 row">
                    <label for="plantilla" class="col-4 form-control-label">Orientacion :</label>
                    <div class="col-8">
                        <label for="plantilla" class="col-4 form-control-label">{{$curso->orientacion}}</label>
                    </div>
                </div>
                
                <img src="{{asset('storage/plantilla/'.$curso->plantilla)}}" width="100px" height="100px">
                
                <div class="mb-4 row"></div>
                
                <div class="mb-4 row">
                    <form action="{{route('updatePlantilla')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">

                        <div class="mb-3 row">
                            <label for="orientacion" class="col-4 form-control-label">Orientacion</label>
                            <div class="col-8">
                                <select name="orientacion" class="form-control" required="true">
                                    <option value="">Seleccionar Orientacion</option>
                                    <option value="Vertical">Vertical</option>
                                    <option value="Horizontal">Horizontal</option>
                                </select>                            
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="plantilla" class="col-4 form-control-label">Cambiar Certificado</label>
                            <div class="col-8">
                                <input type="file" name="plantilla" class="form-control" accept="image/png,image/jpeg" required="true">
                            </div>
                        </div>
                        
                        <div class="mb-3 row"><hr></div>

                        <div class="mb-3 row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success botn-block">
                                    <i class="fa fa-save"></i> Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="escritorio"></div>
</div>  
  
@endsection


@section('label2')
<!-- modal static -->
<div class="modal fade" id="modalCoordinador" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
   <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title text-center" id="staticModalLabel">Adicionar Coordinadores</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
                <form action="{{route('agregarCoordinadorCurso')}}" method="post" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id_curso" value="{{$curso->id_curso}}">
                    <div class="mb-4 row"></div>
                    <div class="mb-4 row">
                        <label for="coordinador" class="col-4 form-control-label">Coordinador</label>
                        <div class="col-8">
                            <select name="id_coordinador" class="form-control">
                                <option value="">Seleccionar</option>
                                @foreach($lista_coordinador as $value)
                                <option value="{{$value->id_coordinador}}">{{$value->corto}} {{$value->nombre}} {{$value->paterno}} {{$value->materno}} : {{$value->tipo}}</option>
                                @endforeach
                            </select>                            
                        </div>
                    </div>
                    
                    <div class="mb-4 row">
                        <hr>
                    </div>

                    <div class="mb-4 row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-success botn-block">
                                <i class="fa fa-save"></i> Agregar Coordinador
                            </button>
                        </div>
                        <div class="col-4"></div>
                    </div>

                </form>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
           </div>
       </div>
   </div>
</div>
<!-- end modal static -->
@endsection