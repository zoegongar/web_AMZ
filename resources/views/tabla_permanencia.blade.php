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
    <link rel="stylesheet" type="text/css" href="../css/comun.css">
    <script type="text/javascript" src="../js/autentificacion.js"></script>
    <script type="text/javascript" src="../js/permanencias.js"></script>

    <title>permancias</title>
</head>
<body>
    <form action="../js/permanencias.js" method="get" name="permanencia">
        <fieldset>
            <legend>Crear o modificar una permanencia</legend>
            <label>Día de la semana</label>
            <select name="dia_semana" id="dia_semana">
            <option class="dia_semana" value="lunes">Lunes</option>
            <option class="dia_semana" value="martes">Martes</option>
            <option class="dia_semana" value="miercoles">Miércoles</option>
            <option class="dia_semana" value="jueves">Jueves</option>
	        <option class="dia_semana" value="viernes">Viernes</option>
            <option class="dia_semana" value="sabado">Sábado</option>
            <option class="dia_semana" value="domingo">Domingo</option>
            </select>
            <br><br>
            <label>Hora de comienzo</label>
            <select name="hora_comienzo" class="hora_comienzo" name="hora_comienzo" id="hora_comienzo">
            <option name="hora_comienzo" class="hora_comienzo" value="9:00">9:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="9:30">9:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="10:00">10:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="10:30">10:30</option>
	        <option name="hora_comienzo" class="hora_comienzo" value="11:00">11:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="11:30">11:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="12:00">12:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="12:30">12:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="13:00">13:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="13:30">13:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="14:00">14:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="14:30">14:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="15:00">15:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="15:30">15:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="16:00">16:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="16:30">16:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="17:00">17:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="17:30">17:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="18:00">18:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="18:30">18:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="19:00">19:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="19:30">19:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="20:00">20:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="20:30">20:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="21:00">21:00</option>
            <option name="hora_comienzo" class="hora_comienzo" value="21:30">21:30</option>
            <option name="hora_comienzo" class="hora_comienzo" value="22:00">22:00</option>
            </select>

            <label>Hora de fin</label>
            <select  name="hora_semana" id="hora_fin">
            <option class="hora_fin" value="9:00">9:00</option>
            <option class="hora_fin" value="9:30">9:30</option>
            <option class="hora_fin" value="10:00">10:00</option>
            <option class="hora_fin" value="10:30">10:30</option>
	        <option class="hora_fin" value="11:00">11:00</option>
            <option class="hora_fin" value="11:30">11:30</option>
            <option class="hora_fin" value="12:00">12:00</option>
            <option class="hora_fin" value="12:30">12:30</option>
            <option class="hora_fin" value="13:00">13:00</option>
            <option class="hora_fin" value="13:30">13:30</option>
            <option class="hora_fin" value="14:00">14:00</option>
            <option class="hora_fin" value="14:30">14:30</option>
            <option class="hora_fin" value="15:00">15:00</option>
            <option class="hora_fin" value="15:30">15:30</option>
            <option class="hora_fin" value="16:00">16:00</option>
            <option class="hora_fin" value="16:30">16:30</option>
            <option class="hora_fin" value="17:00">17:00</option>
            <option class="hora_fin" value="17:30">17:30</option>
            <option class="hora_fin" value="18:00">18:00</option>
            <option class="hora_fin" value="18:30">18:30</option>
            <option class="hora_fin" value="19:00">19:00</option>
            <option class="hora_fin" value="19:30">19:30</option>
            <option class="hora_fin" value="20:00">20:00</option>
            <option class="hora_fin" value="20:30">20:30</option>
            <option class="hora_fin" value="21:00">21:00</option>
            <option class="hora_fin" value="21:30">21:30</option>
            <option class="hora_fin" value="22:00">22:00</option>
            </select>
            <br><br>
            <input type="button" name="crear_modificar_permanencia" value="crear una permanencia" onclick="crear_permanencia()">
        
        </fieldset>
    </form>




    <div class="grid-permanencias">
<!--  -->
            <div class="resaltado">Horas</div>
            <div class="resaltado">Lunes</div>
            <div class="resaltado">Martes</div>
            <div class="resaltado">Miércoles</div>
            <div class="resaltado">Jueves</div>
            <div class="resaltado">Viernes</div>
            <div class="resaltado">Sábado</div>
            <div class="resaltado">Domingo</div>
<!--  -->
            <div class="resaltado">9:00 - 9:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">9:30-10:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">10:00 - 10:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">10:30-11:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">11:00 - 11:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">11:30-12:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">12:00 - 12:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">12:30-13:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">13:00 - 13:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">13:30-14:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">14:00 - 14:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">14:30-15:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">15:00 - 15:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">15:30-16:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">16:00 - 16:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">16:30-17:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">17:00 - 17:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">17:30-18:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">18:00 - 18:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
       
            <div class="resaltado">18:30-19:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">19:00 - 19:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>

            <div class="resaltado">19:30-20:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">20:00 - 20:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">20:30-21:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">21:00 - 21:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        
            <div class="resaltado">21:30-22:00</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>

            <div class="resaltado">22:00 - 22:30</div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</body>
</html>

