@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    <div class="table-responsive table-responsive-data3">
        <table class="table table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Grado Academico</th>
                    <th>Abreviatura</th>
                    <th><a href="{{route('listaGrado',$uri)}}" class="btn btn-success">Ver Todos</a>
                    <a href="{{route('formularioGrado')}}" class="btn btn-info">Agregar</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($lista_grado as $value)
                <tr class="tr-shadow">
                    <td>{{$value->id}}</td>
                    <td>{{$value->nombre}}</td>
                    <td>{{$value->corto}}</td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <a href="{{route('editarGrado',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar Grado Academico">
                                <i class="zmdi zmdi-edit"></i>
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