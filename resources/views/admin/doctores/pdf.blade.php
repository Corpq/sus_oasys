<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <table border="0" style="font-size: 8pt">
        <tr>
            <td style="text-align: center;">
                {{$configuracion->nombre}} <br>
                {{$configuracion->direccion}} <br>
                {{$configuracion->telefono}} <br>
                {{$configuracion->correo}} <br>
            </td>
            <td width="330px"></td>
            <td>
                <img src="{{public_path('storage/'.$configuracion->logo)}}" alt="logo" width="100px">
            </td>
        </tr>

    </table>

    <br>

    <h2 style="text-align: center"> <u>LISTADO DEL PERSONAL MEDICO</u> </h2>
    <br>
    <table class="table table-bordered table-sm table-striped">
        <thead>
            <tr style="background-color: #e7e7e7">
                <th>NRO</th>
                <th>APELLIDOS Y NOMBRES</th>
                <th>TELEFONO</th>
                <th>LICENCIA MEICA</th>
                <th>ESPECIALIDAD</th>
            </tr>
        </thead>
        <tbody>
            <?php $contador = 1; ?>
            @foreach ($doctores as $doctore)
            <tr>
                <td style="text-align: center" >{{$contador}}</td>
                <td>{{$doctore->apellidos." ".$doctore->nombres}}</td>
                <td style="text-align: center;" >{{$doctore->telefono}}</td>
                <td>{{$doctore->licencia_medica}}</td>
                <td>{{$doctore->especialidad}}</td>
            </tr>
            
            @endforeach
        </tbody>
    </table>

</body>

</html>