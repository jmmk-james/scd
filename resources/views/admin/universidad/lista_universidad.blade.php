@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    
    <div class="table-responsive table-responsive-data3">
        <table class="table table-data3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Universidad</th>
                    <th>Estado</th>
                    <th>
                        <a href="{{route('listaUniversidad',$uri)}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-filter-list"></i> 
                        </a>
                        <a href="{{route('formularioUniversidad')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
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
                        <span class="badge badge-success">Activo</span>
                        <?php  $eliminar="Eliminar Carrera"; 
                            $icon="zmdi-delete";?>
                        @else
                        <span class="badge badge-danger">Eliminado</span>
                        <?php  $eliminar="Activar Carrera"; 
                            $icon="zmdi-plus-square";?>
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <a href="{{route('editarUniversidad',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar Carrera">
                                <i class="zmdi zmdi-edit"></i>
                            </a>                            
                            <a href="{{route('eliminarUniversidad',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="{{$eliminar}}">
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