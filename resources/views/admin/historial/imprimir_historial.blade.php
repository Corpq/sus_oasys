<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>MODULO DE REPORTE</title>
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

    <h3 style="text-align: center"> <u>HISTORIAL CLINICO</u> </h3>
    <br>
    <h4>Informacion del paciente</h4>
    <table>
        <tr>
            <td> <b>Paciente: </b> </td>
            <td>{{$paciente->apellidos." ".$paciente->nombres}}</td>
        </tr>
        <tr>
            <td><b>Carnet de identidad:</b></td>
            <td>{{$paciente->ci}}</td>
        </tr>
        <tr>
            <td><b>Nro de seguro:</b></td>
            <td>{{$paciente->nro_seguro}}</td>
        </tr>
        <tr>
            <td><b>Fecha de nacimiento:</b></td>
            <td>{{$paciente->fecha_nacimiento}}</td>
        </tr>
    </table>

    <hr>

    <h4>Diagnosticos realizados</h4>

    <hr>
    @foreach ($historiales as $historiale)
    <table>
        <tr>
            <td> <b>Fecha: </b> </td>
            <td>{{$historiale->fecha_visita}}</td>
        </tr>
        <tr>
            <td><b>Diagnostico:</b></td>
            <td>{!!$historiale->detalle!!}</td>
        </tr>
    </table>
    <hr>
    
    @endforeach

  


</body>

</html>