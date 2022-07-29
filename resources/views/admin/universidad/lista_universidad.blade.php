@extends('admin.plantillas.admin')

@section('label1')
<div class="col-12">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Universidad</th>
                <th>Estado</th>
                <th>
                    <a href="{{route('listaUniversidad',$uri)}}" class="btn btn-primary" title="Mostrar Todos Los Registros"><i class="fa fa-filter" aria-hidden="true"></i></a>
                    <a href="{{route('formularioUniversidad')}}" class="btn btn-success" title="Agregar Universidad"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0;
                $eliminar="Eliminar Universidad";
                $icon=""; 
            ?>
            @foreach($lista_universidad as $value)
            <?php $i=$i+1; ?>
            <tr class="tr-shadow">
                <td>{{$i}}</td>
                <td>{{$value->universidad}}</td>                    
                <td>
                    @if($value->estado==1)
                    <span class="badge bg-success">Activo</span>
                    <?php  
                        $boton="btn-danger";  
                        $eliminar="Eliminar Universidad"; 
                        $icon="fa fa-trash-o";?>
                    @else
                    <span class="badge bg-danger">Eliminado</span>
                    <?php
                        $boton="btn-success";  
                        $eliminar="Activar Universidad"; 
                        $icon="fa fa-plus-square";?>
                    @endif
                </td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{route('editarUniversidad',$value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Carrera">
                            <i class="fa fa-edit"></i>
                        </a>                            
                        <a href="{{route('eliminarUniversidad',$value->id)}}" class="btn {{$boton}}" data-toggle="tooltip" data-placement="top" title="{{$eliminar}}">
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