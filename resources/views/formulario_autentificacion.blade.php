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
    <title>acceso personas socias</title>
</head>
<body>
    
    <form>
       <legend>autentificación</legend> 
       <label for="alias">Alias</label>
       <input type="text" id="alias" name="alias" placeholder="inserta aquí tu alias" pattern="{4,}"><br><br>
       <label for="password">Contraseña</label>
       <input type="password" id="password" name="password" placeholder="Inserta aquí la contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br><br>
       <input type="submit" id="conectar " name="autentificación">
<!-- Falta meter un reinicio de la contraseña y del alias por medio del correo. De momento se hace desde el administrador -->

    </form>
</body>
</html>