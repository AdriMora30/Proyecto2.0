<?php
    $destino="consulta@jygproyectoweb.com";
    $nombre= $_post["nombre"];
    $correo= $_post["correo"];
    $telefono= $_post["telefono"];
    $mensaje= $_post["mensaje"];
    $contenido = "Nombre" . $nombre . "\nCorreo" . $correo . "\Teléfono".$telefono."\Mensaje".$mensaje;
mail($destino,$"Contacto", $contenido);
header("Location:gracias.html");
    ?>