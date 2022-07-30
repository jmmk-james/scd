@extends('admin.plantillas.admin')

@section('label1')

<div class="col-12">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Celular</th>
                <th>Correo</th>
                <th >
                    <a href="{{route('listaEstudiante',$uri)}}" class="btn btn-primary" title="Mostrar Todos Los Registros"><i class="fa fa-filter" aria-hidden="true"></i></a>
                    <a href="{{route('formularioEstudiante')}}" class="btn btn-success" title="Agregar Nuevo Estudiante"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista_estudiante as $value)
            <tr>
                <td>
                    ID - E : {{$value->id_estudiante}}<br>
                    ID - P : {{$value->id_persona}}
                </td>
                <td>{{$value->corto}} {{$value->nombre}} {{$value->paterno}} {{$value->materno}}<br><span class="badge bg-success">{{$value->profesion}}</span><br>{{$value->ci}}
                    
                </td>
                <td>{{$value->celular}}</td>
                <td>{{$value->correo}}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{route('perfilCurso',$value->id_estudiante)}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Perfil Curso">
                            <i class="fa fa-clipboard"></i>
                        </a>
                        <a href="{{route('perfilCurso',$value->id_estudiante)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Perfil Coordinador">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{route('perfilCurso',$value->id_estudiante)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Estudiantes Inscritos">
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
