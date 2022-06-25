@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    <div class="table-responsive table-responsive-data3">
        <table class="table table-data3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th><a href="{{route('listaTipo',$uri)}}" class="btn btn-success">Ver todos</a>
                    <a href="{{route('formularioTipo')}}" class="btn btn-info">Agregar</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $eliminar="Eliminar Tipo";
                    $icon=""; 
                ?>
                @foreach($lista_tipo as $value)
                <tr class="tr-shadow">
                    <td>{{$value->id}}</td>
                    <td>{{$value->tipo}}</td>
                    <td>
                        @if($value->estado==1)
                        <span class="badge badge-success">Activo</span>
                        <?php  $eliminar="Eliminar Tipo de Coordinacion"; 
                            $icon="zmdi-delete";?>
                        @else
                        <span class="badge badge-danger">Eliminado</span>
                        <?php  $eliminar="Activar Tipo de Coordinacion"; 
                            $icon="zmdi-plus-square";?>
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <a href="{{route('editarTipo',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar Usuario">
                                <i class="zmdi zmdi-edit"></i>
                            </a>                            
                            <a href="{{route('eliminarTipo',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="{{$eliminar}}">
                                <i class="zmdi {{$icon}}"></i>
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