<?php
    $destino = "alejandroriquelme4@hotmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $contenidoUnido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($destino, $asunto, $contenidoUnido);
    header("Location:www.google.es");
?>