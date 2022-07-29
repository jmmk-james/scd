@extends('admin.plantillas.admin')

@section('label1')
<div class="col-12">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Grado Academico</th>
                <th>Abreviatura</th>
                <th><a href="{{route('listaGrado',$uri)}}" class="btn btn-primary" title="Mostrar Todos Los Registros"><i class="fa fa-filter" aria-hidden="true"></i></a>
                <a href="{{route('formularioGrado')}}" class="btn btn-success" title="Agregar Usuario"><i class="fa fa-plus" aria-hidden="true"></i></a>
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
                        <a href="{{route('editarGrado',$value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Grado Academico">
                            <i class="fa fa-edit"></i>
                        </a>                            
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection