<?php
    $destino="edgarespecialista@gmail.com";
    $nombre= $_POST["nombre"];
    $email= $_POST["email"];
    $tel= $_POST["tel"];
    $msg= $_POST["msg"];
    $contenido= "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTelefono: " . $tel . "\nMensaje: " . $msg;
    mail($destino,"Cotizaciones - Cambios a un Click",$contenido);
    header("location:return.html");
?>