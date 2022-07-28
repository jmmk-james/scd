
<div class="verifica">
        <div class="col-md-12 col-sm-12">
            <div class="heading-section text-center" role="alert">
                <div class="alert alert-warning"><p> Boleta de Inscripcion</p>
                </div>
                <div class="iconos">
                <a href="{{route('boletaInscrito',$pdf)}}" class="btn btn-primary btn-block">Descargar Boleta <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="alert alert-success" role="alert">
                <p>{{$curso->corto}} {{$curso->nombre}} {{$curso->paterno}} {{$curso->materno}} - C.I. : {{$curso->ci}} - ID : {{$curso->id_persona}}</p>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="alert alert-success" role="alert">
                <p>Estado : {{$curso->profesion}}</p>
                <p>Grado Academico : {{$curso->grado}}</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="alert alert-success" role="alert">Celular : {{$curso->celular}}</div>
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="alert alert-success" role="alert">E-mail : {{$curso->correo}}</div>
        </div>
        <div class="col-md-12 col-sm-12 text-center">
            <div class="alert alert-success" role="alert">{{$curso->titulo}}</div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="alert alert-success" role="alert">
                <p>ID-It. :{{$curso->id_inscrito}}</p>
                <p>Carga Horaria : {{$curso->carga}}</p>
                <p>Fecha : {{$curso->fecha}}</p>
                <p>Gestion : {{$curso->gestion}}</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="alert alert-success" role="alert">
                <p>Tipo : {{$curso->tipo}}</p>
                <p>Cupo : {{$curso->cupo}}</p>
                <p>Codigo : {{$curso->code}}</p>
            </div>
        </div>
        
    </div>
