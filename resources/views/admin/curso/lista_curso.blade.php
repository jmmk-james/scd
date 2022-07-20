@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    <div class="table-responsive table-responsive-data3">
        <table class="table table-data3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Detalle</th>
                    <th>Estado</th>
                    <th>
                        <a href="{{route('listaCurso',$uri)}}" class="btn btn-success"><i class="zmdi zmdi-filter-list"></i></a>
                        <a href="{{route('formularioCurso')}}" class="btn btn-info"><i class="zmdi zmdi-plus"></i> </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($lista_curso as $value)
                <tr class="tr-shadow">
                    <td>{{$value->id}}</td>
                    <td>{{$value->titulo}}</td>
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
                            <a href="{{route('perfilCurso',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Perfil Curso">
                                <i class="fa fa-clipboard"></i>
                            </a>
                            <a href="{{route('perfilCurso',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Perfil Coordinador">
                                <i class="zmdi zmdi-mail-send"></i>
                            </a>
                            <a href="{{route('perfilCurso',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Estudiantes Inscritos">
                                <i class="fa fa-users"></i>
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