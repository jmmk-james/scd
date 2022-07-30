@extends('admin.plantillas.admin')

@section('label1')
<div class="col-12">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Detalle</th>
                <th>Estado</th>
                <th>
                    <a href="{{route('listaCurso',$uri)}}" class="btn btn-primary" title="Mostrar Todos Los Registros"><i class="fa fa-filter" aria-hidden="true"></i></a>
                    <a href="{{route('formularioCurso')}}" class="btn btn-success" title="Agregar Nuevo Curso"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista_curso as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->titulo}}<br>Cantidad de Inscritos : <span class="badge bg-success">{{$value->total}}</span></td>
                <td>Carga: {{$value->carga}}<br>Cupo: {{$value->cupo}}<br>Fecha: {{$value->fecha}}</td>
                <td>
                    @if ($value->estado=="ACTIVO")
                        <div class="alert alert-success" role="alert">
                            {{$value->estado}}
                        </div>
                    @else
                        <div class="alert alert-danger" role="alert">
                            {{$value->estado}}
                        </div>
                    @endif
                </td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{route('perfilCurso',$value->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Perfil Curso">
                            <i class="fa fa-clipboard"></i>
                        </a>
                        <a href="{{route('perfilCurso',$value->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Perfil Coordinador">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{route('perfilCurso',$value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Estudiantes Inscritos">
                            <i class="fa fa-users"></i>
                        </a>                            
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection