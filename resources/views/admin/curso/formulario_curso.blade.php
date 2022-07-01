@extends('admin.plantillas.admin')

@section('label1')
<div class="row">
    <div class="col-lg-2">
        
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4>{{$titulo2}}</h4>
            </div>
            <div class="card-body card-block">
                @if(session('mensaje'))
                    <div class="alert alert-danger" role="alert">
                        {{session('mensaje')}}
                    </div>
                @endif
                <form action="{{route('agregarCurso')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="titulo" class=" form-control-label">Titulo</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="titulo" class="form-control" placeholder="Titulo"  required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="detalle" class=" form-control-label">Detalle</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <textarea name="detalle" class="form-control" placeholder="Detalle"  required="true"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="tipo" class=" form-control-label">Tipo</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="id_tipocurso" class="form-control" required="true">
                                <option value="">Seleccionar </option>
                                @foreach($tipoCurso as $value)
                                <option value="{{$value->id}}">{{$value->tipo}} {{$value->code}}</option>
                                @endforeach 
                            </select>                            
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="carga" class=" form-control-label">Carga Horaria</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="carga" class="form-control" placeholder="Carga Horaria" value="0" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="fecha" class=" form-control-label">Fecha</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="date" name="fecha" class="form-control" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="relevancia" class=" form-control-label">Relevancia</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <textarea name="relevancia" class="form-control" placeholder="Relevancia"  required="true"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="promo" class=" form-control-label">Imagen Promocional</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="file" name="promo" class="form-control" accept="image/png,image/jpeg" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <label for="plantilla" class=" form-control-label">Plantilla Certificado</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="file" name="plantilla" class="form-control" accept="image/jpeg" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12 col-md-12">
                            <hr>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-6">
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fa fa-check"></i> Registrar
                            </button>
                        </div>
                        <div class="col col-md-6">
                            <a href="{{route('listaTipo',$uri)}}" class="btn btn-danger btn-block">
                                <i class="fa fa-close"></i> Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                Los datos para el Curso Registrados en el Sistema seran publicados cuando se agreguen coordinadores (firmas del certificado).
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        
    </div>
</div>
@endsection