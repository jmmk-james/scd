@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    <div class="table-responsive table-responsive-data3">
        <table class="table table-data3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Celular</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th></th>
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
                    <td>{{$value->correo}}
                        <span class="badge badge-warning">{{$value->nombre}} {{$value->paterno}} {{$value->materno}}</span>
                    </td>                    
                    <td>{{$value->celular}}</td>
                    <td>{{$value->tipo}}</td>
                    <td>
                        @if($value->estado==1)
                        <span class="badge badge-success">Activo</span>
                        <?php  $eliminar="Eliminar Usuario"; 
                            $icon="zmdi-delete";?>
                        @else
                        <span class="badge badge-danger">Eliminado</span>
                        <?php  $eliminar="Activar Usuario"; 
                            $icon="zmdi-plus-square";?>
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <a href="{{route('perfilUsuario',$value->usuario_id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar Usuario">
                                <i class="zmdi zmdi-edit"></i>
                            </a>                            
                            <a href="{{route('eliminarUsuario',$value->usuario_id)}}" class="item" data-toggle="tooltip" data-placement="top" title="{{$eliminar}}">
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