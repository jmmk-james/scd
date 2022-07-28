<html>
    <head>
        <link rel="stylesheet" href="{{asset('publico/assets/css/boleta.css')}}">
    </head>
    <body class="margen">
        <table width="650px">
            <thead>
                <tr>
                    <th width="162px">hola</th>
                    <th width="306px">Datos de la Entidad</th>
                    <th width="162px"><img src="{{asset('qr/'.$curso->id_inscrito.'.png')}}"></th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="3" align="center"><h3>Boleta de Inscripción</h3></td></tr>
                <tr><td colspan="3" ><p>{{$curso->corto}} {{$curso->nombre}} {{$curso->paterno}} {{$curso->materno}} - C.I. : {{$curso->ci}} - ID : {{$curso->id_persona}}</p></td></tr>
                <tr><td colspan="3" >
                    <p>Estado : {{$curso->profesion}}</p>
                    <p>Grado Academico : {{$curso->grado}}</p>
                </td></tr>
                <tr>
                    <td>Celular : {{$curso->celular}}</td>
                    <td colspan="2">E-mail : {{$curso->correo}}</td>
                </tr>
            </tbody>
        </table>
        <table width="650px">
            <tbody>
                <tr><td width="315px"></td><td width="315px"></td></tr>
                <tr><td colspan="2" align="center"><h3>{{$curso->titulo}}</h3></td></tr>
                <tr>
                    <td>
                        ID-It. :{{$curso->id_inscrito}}<br>
                        Carga Horaria : {{$curso->carga}}<br>
                        Fecha : {{$curso->fecha}}<br>
                        Gestion : {{$curso->gestion}}<br>
                    </td>
                    <td>
                        Tipo : {{$curso->tipo}}<br>
                        Cupo : {{$curso->cupo}}<br>
                        Codigo : {{$curso->code}}<br>
                    </td>
                </tr>
            </tbody>
        </table>
        {{$ip}}<br>{{$hora}}
    </body>
</html>