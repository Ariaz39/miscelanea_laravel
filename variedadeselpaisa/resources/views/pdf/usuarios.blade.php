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
        padding: 5px;
    }
</style>
<body>
<h1>Listado de usuarios Variedades el Paisa</h1>
<table class="border">
    <thead>
        <tr>
            <th class="border">Id</th>
            <th class="border">Nombre Apellido</th>
            <th class="border">Celular</th>
            <th class="border">Grupo</th>
            <th class="border">Dirección</th>
            <th class="border">Servicio</th>
            <th class="border">Tipo de pago</th>
            <th class="border">Ip Asignada</th>
            <th class="border">Inicio de Servicio</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuario as $key)
            <tr class="border">
                <td class="border">{{$key->id}}</td>
                <td class="border">{{$key->nombre}}</td>
                <td class="border">{{$key->celular}}</td>
                <td class="border">{{$key->grupos->nombre}}</td>
                <td class="border">{{$key->veredas->nombre}}</td>
                <td class="border">{{$key->servicios->nombre}}</td>
                <td class="border">{{$key->tpago->nombre}}</td>
                <td class="border">{{$key->ip}}</td>
                <td class="border">{{$key->f_inicio}}</td>
            </tr>
        @endforeach


        </tbody>
</table>

</body>
</html>
