@extends('admin.plantillas.admin')

@section('label1')
<div class="col-12">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Profesion</th>
                <th>
                    <a href="{{route('listaProfesion',$uri)}}" class="btn btn-primary" title="Mostrar Todos Los Registros"><i class="fa fa-filter" aria-hidden="true"></i></a>
                    <a href="{{route('formularioProfesion')}}" class="btn btn-success" title="Agregar Profesion"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista_profesion as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->profecion}}</td>                    
                <td>
                    <div class="table-data-feature">
                        <a href="{{route('editarProfesion',$value->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Profesion">
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