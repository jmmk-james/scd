@extends('admin.plantillas.secion')

@section('label1')

<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <h1>SCD - ADMIN</h1>
                        </a>
                        @if(session('mensaje_error'))
                            <div class="alert alert-danger" role="alert">
                                {{session('mensaje_error')}}
                            </div>
                        @endif
                    </div>
                    <div class="login-form">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Usuario</label>
                                <input class="au-input au-input--full" type="email" name="correo" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="pass" placeholder="Password">
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection