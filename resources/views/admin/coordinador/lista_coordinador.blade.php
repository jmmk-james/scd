@extends('admin.plantillas.admin')

@section('label1')
<div class="col-md-12">
    <div class="table-responsive table-responsive-data3">
        <table class="table table-data3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Corrdinador</th>
                    <th>Datos</th>
                    <th>Detalle</th>
                    <th>
                        <a href="{{route('listaCoordinador',$uri)}}" class="btn btn-success"><i class="zmdi zmdi-filter-list"></i></a>
                        <a href="{{route('formularioCoordinador')}}" class="btn btn-info"><i class="zmdi zmdi-plus"></i> </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0;?>
                @foreach($lista_coordinador as $value)
                <?php $i=$i+1;?>
                <tr class="tr-shadow">
                    <td>{{$i}}</td>
                    <td>{{$value->corto}} {{$value->nombre}} {{$value->paterno}} {{$value->materno}}</td>
                    <td>C.I. {{$value->ci}}<br>{{$value->correo}}<br>Cel. {{$value->celular}}</td>
                    <td>{{$value->tipo}}</td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <a href="{{route('perfilCoordinador',$value->id_persona)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar Usuario">
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