<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $destinatario = 'ddiazt2122@politecnics.barcelona';
    $asunto = 'Nuevo mensaje de contacto';
    $contenido = "Email: $email\n\nMensaje: $mensaje";
    
    // Envío del correo electrónico
    if (mail($destinatario, $asunto, $contenido)) {
        echo 'El correo electrónico ha sido enviado con éxito.';
    } else {
        echo 'Ha ocurrido un error al enviar el correo electrónico.';
    }
    header("Location:Portfolio2.html");
// }
?>
