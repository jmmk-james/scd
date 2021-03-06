<!-- MENU SIDEBAR-->
<?php $uri=array('id_search'=>0,'search'=>0);?>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="{{$titulo}}" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li><a href="{{route('scd')}}"><i class="fas fa-chart-bar"></i>Escritorio</a></li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user-circle"></i>Usuario</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href="{{route('FormularioAgregarUsuario')}}">Agregar Usuario</a></li>
                        <li><a href="{{route('listaUsuario',$uri)}}">Listar Usuarios</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Values</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href="{{route('listaCoordinador',$uri)}}">Coordinadores</a></li>
                        <li><a href="{{route('listaGrado',$uri)}}">Grados Academicos</a></li>
                        <li><a href="{{route('listaTipo',$uri)}}">Tipos y Cargos</a></li>
                        <li><a href="{{route('listaCarrera',$uri)}}">Carreras</a></li>
                        <li><a href="{{route('listaUniversidad',$uri)}}">Universidades</a></li>
                        <li><a href="{{route('listaProfesion',$uri)}}">Profesiones</a></li>
                        <li><a href="{{route('listaTipoCurso',$uri)}}">Tipos de Cursos</a></li>
                    </ul>
                
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-bars"></i>Cursos</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href="{{route('formularioCurso')}}">Nuevo Curso</a></li>
                        <li><a href="{{route('listaCurso',$uri)}}">Lista Cursos</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->