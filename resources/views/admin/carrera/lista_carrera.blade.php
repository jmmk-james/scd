@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            
        </div>
        <div class="table-data__tool-right">
            <a href="{{route('listaCarrera',$uri)}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-filter-list"></i>Todas las Carreras
            </a>
            <a href="{{route('formularioCarrera')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>add carrera
            </a>
        </div>
    </div>

    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Carrera</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0;
                    $eliminar="Eliminar Carrera";
                    $icon=""; 
                ?>
                @foreach($lista_carrera as $value)
                <?php $i=$i+1; ?>
                <tr class="tr-shadow">
                    <td>{{$i}}</td>
                    <td>{{$value->nombre}}</td>                    
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
                            <a href="{{route('editarCarrera',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar Carrera">
                                <i class="zmdi zmdi-edit"></i>
                            </a>                            
                            <a href="{{route('eliminarCarrera',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="{{$eliminar}}">
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