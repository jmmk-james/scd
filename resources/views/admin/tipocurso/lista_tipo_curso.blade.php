@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    <div class="table-responsive table-responsive-data3">
        <table class="table table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Code</th>
                    <th>Estado</th>
                    <th><a href="{{route('listaTipoCurso',$uri)}}" class="btn btn-success">Ver Todos</a>
                    <a href="{{route('formularioTipoCurso')}}" class="btn btn-info">Agregar</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $eliminar="Eliminar Tipo de Curso";
                    $icon=""; 
                ?>
                @foreach($lista_tipo_curso as $value)
                <tr class="tr-shadow">
                    <td>{{$value->id}}</td>
                    <td>{{$value->tipo}}</td>
                    <td>{{$value->code}}</td>
                    <td>
                        @if($value->estado==1)
                        <span class="badge badge-success">Activo</span>
                        <?php  $eliminar="Eliminar Tipo de Curso"; 
                            $icon="zmdi-delete";?>
                        @else
                        <span class="badge badge-danger">Eliminado</span>
                        <?php  $eliminar="Activar Tipo de Curso"; 
                            $icon="zmdi-plus-square";?>
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{route('editarTipoCurso',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar Tipo Curso">
                                <i class="zmdi zmdi-edit"></i>
                            </a>                            
                            <a href="{{route('eliminarTipoCurso',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="{{$eliminar}}">
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