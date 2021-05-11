<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Listado de usuarios</title>
</head>
<style>
    .border {
        border: 1px solid black;
    }
</style>
<body>
<table class="">
    <thead>
        <tr>
            <th>Nombre Apellido</th>
            <th>Celular</th>
            <th>Grupo</th>
            <th>Dirección</th>
            <th>Servicio</th>
            <th>Tipo de pago</th>
            <th>Ip Asignada</th>
            <th>Inicio de Servicio</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $key)
            <tr class="border">
                <td>{{$key->nombre}}</td>
                <td>{{$key->celular}}</td>
                <td>{{$key->grupos->nombre}}</td>
                <td>{{$key->veredas->nombre}}</td>
                <td>{{$key->servicios->nombre}}</td>
                <td>{{$key->tpago->nombre}}</td>
                <td>{{$key->ip}}</td>
                <td>{{$key->f_inicio}}</td>
            </tr>
        @endforeach


        </tbody>
</table>

</body>
</html>
