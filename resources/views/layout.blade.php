<?php
/*Señala errores */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina pral AMZ</title>
</head>
<body>
    <ul class="horizontal">
        <li class="horizontal"><a href="{{ route('formulario_autentificacion')}}">Identificarse en esto</a></li>
        <li class="horizontal"><a href="{{route('formulario_suscripcion')}}">Suscribirse</a></li>
        <li class="horizontal"><a href="{{route('inicio_sin_registro')}}">Acceder sin registro</a></li>
    </ul>
    <div>
        @yield('content')
        
    </div>
 
</body>
</html>