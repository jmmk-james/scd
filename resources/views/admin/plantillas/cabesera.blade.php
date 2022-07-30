<?php $uri=array('id_search'=>0,'search'=>0);?>
<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <div class="row">
                <div class="col-2">
                    <a class="navbar-brand" href="#">SCD {{$usuario->nombre}}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="col-6">
                    <form class="d-flex" action="{{route($funcion)}}" method="POST">
                        @csrf
                        <input type="hidden" name="id_search" value="{{$id_search}}"/>
                        <input class="form-control form-control-lg" type="text" name="search" placeholder="{{$tipo}}" />
                        <button class="btn btn-outline-success" type="submit">
                            <span class="fa fa-search"></span>
                        </button>
                    </form>
                </div>
                
                <div class="col-4">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-right">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('scd')}}">Escritorio</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('FormularioAgregarUsuario')}}">Agregar Usuario</a></li>
                                <li><a class="dropdown-item" href="{{route('listaUsuario',$uri)}}">Listar Usuarios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarValores" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Valores
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('listaCoordinador',$uri)}}">Coordinadores</a></li>
                                <li><a class="dropdown-item" href="{{route('listaGrado',$uri)}}">Grados Academicos</a></li>
                                <li><a class="dropdown-item" href="{{route('listaTipo',$uri)}}">Tipos y Cargos</a></li>
                                <li><a class="dropdown-item" href="{{route('listaCarrera',$uri)}}">Carreras</a></li>
                                <li><a class="dropdown-item" href="{{route('listaUniversidad',$uri)}}">Universidades</a></li>
                                <li><a class="dropdown-item" href="{{route('listaProfesion',$uri)}}">Profesiones</a></li>
                                <li><a class="dropdown-item" href="{{route('listaTipoCurso',$uri)}}">Tipos de Cursos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarCurso" role="button" data-bs-toggle="dropdown" aria-expanded="false">Curso</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('listaCurso',$uri)}}">Lista de Cursos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{route('listaEstudiante',$uri)}}">Lista de Estudiantes</a></li>
                                    
                                </ul>
                            </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarUsuario" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{$usuario->correo}}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('perfil')}}">Perfil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{route('exit')}}">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
</div>