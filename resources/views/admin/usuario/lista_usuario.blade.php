@extends('admin.plantillas.admin')

@section('label1')
<div class="col-12">
    <div class="">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Celular</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>
                        <a href="{{route('listaUsuario',$uri)}}" class="btn btn-primary" title="Mostrar Todos Los Registros"><i class="fa fa-filter" aria-hidden="true"></i></a>
                        <a href="{{route('FormularioAgregarUsuario',$uri)}}" class="btn btn-success" title="Agregar Usuario"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0;
                    $eliminar="Eliminar Usuario";
                    $icon=""; 
                ?>
                @foreach($lista_usuario as $value)
                <?php $i=$i+1; ?>
                <tr class="tr-shadow">
                    <td>{{$i}}</td>
                    <td>{{$value->correo}}</td> 
                    <td>{{$value->nombre}} {{$value->paterno}} {{$value->materno}}</td>                   
                    <td>{{$value->celular}}</td>
                    <td>{{$value->tipo}}</td>
                    <td>
                        @if($value->estado==1)
                        <span class="badge bg-success">Activo</span>
                        <?php
                            $boton="btn-danger";  
                            $eliminar="Eliminar Usuario"; 
                            $icon="fa fa-trash-o";?>
                        @else
                        <span class="badge bg-danger">Eliminado</span>
                        <?php
                            $boton="btn-success";  
                            $eliminar="Activar Usuario"; 
                            $icon="fa fa-plus-square";?>
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{route('perfilUsuario',$value->usuario_id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Usuario">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>           
                            <a href="{{route('eliminarUsuario',$value->usuario_id)}}" class="btn {{$boton}}" data-toggle="tooltip" data-placement="top" title="{{$eliminar}}">
                                <i class="{{$icon}}" aria-hidden="true"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection