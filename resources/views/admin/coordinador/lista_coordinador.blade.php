@extends('admin.plantillas.admin')

@section('label1')
<div class="col-12">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Coordinador</th>
                <th>Datos</th>
                <th>Detalle</th>
                <th>
                    <a href="{{route('listaCoordinador',$uri)}}" class="btn btn-primary" title="Mostrar Todos Los Registros"><i class="fa fa-filter" aria-hidden="true"></i></a>
                    <a href="{{route('formularioCoordinador')}}" class="btn btn-success" title="Agregar Coordinador"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0;?>
            @foreach($lista_coordinador as $value)
            <?php $i=$i+1;?>
            <tr class="tr-shadow">
                <td>{{$i}}</td>
                <td>
                    {{$value->corto}} {{$value->nombre}} {{$value->paterno}} {{$value->materno}}
                    <br>{{$value->correo}}
                </td>
                <td>C.I. {{$value->ci}}<br>Cel. {{$value->celular}}</td>
                <td>{{$value->tipo}}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{route('perfilCoordinador',$value->id_coordinador)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Perfil Coordinador">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>                            
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection