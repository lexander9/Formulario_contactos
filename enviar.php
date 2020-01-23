<?php
    //llamando a los campos
    $nombre=$_POST['nombre'];//post llama a los name
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $mensaje=$_POST['mensaje'];


    //Datos para el correo
    $destinatario="alexander.morenoc@outlook.com";
    $asunto="Contacto desde la web braille";
    $carta= "De: $nombre \n";
    $carta .= "Correo: $correo \n";
    $carta .="Telefono: $telefono \n";
    $carta .="Mensaje: $mensaje";


    //enviando mensaje
    mail($destinatario, $asunto, $carta);
    header('Location:mensaje_envio.html');
?>