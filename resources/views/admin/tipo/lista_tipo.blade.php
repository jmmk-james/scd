@extends('admin.plantillas.admin')

@section('label1')
<div class="col-12">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th><a href="{{route('listaTipo',$uri)}}" class="btn btn-primary" title="Mostrar Todos Los Registros"><i class="fa fa-filter" aria-hidden="true"></i></a>
                <a href="{{route('formularioTipo')}}" class="btn btn-success" title="Agregar Tipos y Cargos"><i class="fa fa-plus" aria-hidden="true"></i></a>
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
                    <span class="badge bg-success">Activo</span>
                    <?php  
                        $boton="btn-danger";  
                        $eliminar="Eliminar Tipo de Corrdinador"; 
                        $icon="fa fa-trash-o";?>
                    @else
                    <span class="badge bg-danger">Eliminado</span>
                    <?php
                        $boton="btn-success";  
                        $eliminar="Activar Tipo de Coordinador"; 
                        $icon="fa fa-plus-square";?>
                    @endif
                </td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{route('editarTipo',$value->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Editar Tipo de Coordinador">
                            <i class="fa fa-edit"></i>
                        </a>                            
                        <a href="{{route('eliminarTipo',$value->id)}}" class="btn {{$boton}}" data-toggle="tooltip" data-placement="top" title="{{$eliminar}}">
                            <i class="{{$icon}}"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection