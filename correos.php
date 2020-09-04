<?php
    $para = 'info@classicoymoderno.com';
    //esto el al correo al que se enviara el mensaje
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la pagina ClassicoyModerno";
    $mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($para, $asunto, $mensajecompleto, $header);
    echo "<script>alert('correo enviado exitosamento')</script>";
    echo "<script> setTimeout(\"location href='index1.html'\",1000)</script>";

?>