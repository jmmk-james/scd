@extends('admin.plantillas.admin')

@section('label1')
<div class="row">
    <div class="col-2">
        
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-header text-center">
                <h4>{{$titulo2}}</h4>
            </div>
            <div class="card-body">
                @if(session('mensaje'))
                    <div class="alert alert-danger" role="alert">
                        {{session('mensaje')}}
                    </div>
                @endif
                <form action="{{route('agregarCurso')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="titulo" class="col-4 form-control-label">Titulo : </label>
                        <div class="col-8">
                            <input type="text" name="titulo" class="form-control" placeholder="Titulo"  required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="detalle" class="col-4 form-control-label">Detalle : </label>
                        <div class="col-8">
                            <textarea name="detalle" class="form-control" placeholder="Detalle"  required="true"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tipo" class="col-4 form-control-label">Tipo : </label>
                        <div class="col-8">
                            <select name="id_tipocurso" class="form-control" required="true">
                                <option value="">Seleccionar </option>
                                @foreach($tipoCurso as $value)
                                <option value="{{$value->id}}">{{$value->tipo}} {{$value->code}}</option>
                                @endforeach 
                            </select>                            
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="carga" class=" col-4 form-control-label">Carga Horaria : </label>
                        <div class="col-8">
                            <input type="number" name="carga" class="form-control" placeholder="Carga Horaria" value="0" required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="carga" class="col-4 form-control-label">Cupo : </label>
                        <div class="col-8">
                            <input type="number" name="cupo" class="form-control" placeholder="Cupo de Inscritos" value="1000" required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="fecha" class="col-4 form-control-label">Fecha : </label>
                        <div class="col-8">
                            <input type="date" name="fecha" class="form-control" required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="relevancia" class="col-4 form-control-label">Relevancia : </label>
                        <div class="col-8">
                            <textarea name="relevancia" class="form-control" placeholder="Relevancia"  required="true"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="promo" class="col-4 form-control-label">Imagen Promocional : </label>
                        <div class="col-8">
                            <input type="file" name="promo" class="form-control" accept="image/png,image/jpeg" required="true">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="plantilla" class="col-4 form-control-label">Plantilla Certificado : </label>
                        <div class="col-8">
                            <input type="file" name="plantilla" class="form-control" accept="image/jpeg" required="true">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="orientacion" class="col-4 form-control-label">Orientacion del Certificado : </label>
                        <div class="col-8">
                            <select name="orientacion" class="form-control" required="true">
                                <option value="">Seleccionar Orientacion</option>
                                <option value="Vertical">Vertical</option>
                                <option value="Horizontal">Horizontal</option>
                            </select>                            
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <hr>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-success botn-block">
                                <i class="fa fa-save"></i> Registrar
                            </button>
                        </div>
                        <div class="col-6">
                            <a href="{{route('listaCurso',$uri)}}" class="btn btn-danger botn-block">
                                <i class="fa fa-times"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-2">
        
    </div>
</div>
@endsection