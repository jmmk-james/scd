@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    
    <div class="table-responsive table-responsive-data3">
        <table class="table table-data3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profesion</th>
                    <th>
                        <a href="{{route('listaProfesion',$uri)}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-filter-list"></i>Ver Todas 
                        </a>
                        <a href="{{route('formularioProfesion')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add Profesion
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($lista_profesion as $value)
                <tr class="tr-shadow">
                    <td>{{$value->id}}</td>
                    <td>{{$value->profecion}}</td>                    
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <a href="{{route('editarProfesion',$value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar Profesion">
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