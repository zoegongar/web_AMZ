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
    <link  rel="stylesheet" type="text/css" href="../css/zona_socias.css">
    <link rel="stylesheet" type="text/css" href="../css/comun.css">

    <title>Zona de socias</title>
</head>
<body>
     <!-- Menú superior que lleva a las distintas páginas. -->
  <div class="container mt-3"></div>
  <ul class="nav horizontal">
    <li class="nav-item horizontal">
      <a class="nav-link horizontal" href="formulario_autentificacion.html">Volver al formulario de identificación</a>
    </li>
    <li class="nav-item horizontal">
      <a class="nav-link horizontal" href="inicio_sin_registro.html">Salir y acceder al area sin identificación</a>
    </li>
    <li class="nav-item horizontal horizontal">
      <a class="nav-link" href="formulario_suscripcion.html">Acceder al area de suscripción</a>
    </li>
    <li class="nav-item horizontal horizontal">
        <a class="nav-link" href="portada.html">Volver al inicio</a>
      </li>
  </ul>
</div>
    <div class="mapa_imagen">
        <img src="../Imagenes/zona_socias.jpg" />
      
        <ul class="menu">
            
            <a href="tabla_permanencia.html"><li id="ver_permanencias"><p>Ver la tabla</p></li></a>
            <a href="crear_permanencia.html"><li id="crear_permanencia"><p>Crear una nueva permanencia</p></li></a>
            <a href="modificar_permanencia.html"><li id="modificar_permanencia"><p>modificar una permanencia</p></li></a>
          
        </ul>
      </div>
  <div>
      <ul id="sprite_socias">
        <li id="ver_tabla"><a href="tabla_permanencia.html"></a></li>
        <li id="crear_permanencia"><a href="crear_permanencia.html"></a></li>
        <li id="modificar_permanencia"><a href="modificar_permanencia.html"></a></li>
        <li id="zona_socias"><a href="zona_socias.html"></a></li>
       </ul>   
  </div>       
</body>
</html>