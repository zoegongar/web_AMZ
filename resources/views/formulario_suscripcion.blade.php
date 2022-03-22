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
    <title>formulario de suscripcion</title>
</head>
<body>
    <form>
        <legend>Formulario de suscripcion</legend>
        <label for="name" id="name" name="name">Nombre</label>
        <input type="text" id="name" placeholder="Insersete su nombre" required pattern=".{2,}"><br><br>
        <label for="apellido" id="apellido" name="apellido">apellido</label>
        <input type="text" id="apellido" placeholder="Insersete su apellido" required pattern=".{4,}"><br><br>
        <label for="email" id="email" name="email">correo electrónico</label>
        <input type="email" id="email" placeholder="Insersete su correo electrónico" required pattern=".{[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$}"><br><br>
        <label for="telephone" id="telephone" name="telephone">Teléfono</label>
        <input type="tel" id="telephone" placeholder="Insersete su número de teléfono" required pattern="[0-9]{9}"><br><br>
        <label for="suscriptions">Seleccione los campos a los que te quieres suscribir. Mínimo uno.</label>
        <input type="checkbox" id="privacidad_datos" name="privacidad_datos" value="privacidad_datos">
        <label for="privacidad_datos"> conozco y acepto la polítca de privacidad de <a href="{{ route('privacidad_de_datos')}}">datos.</a></label>
        
        <input type="submit" id="conectar " name="autentificación">
    </form>
</body>
</html>