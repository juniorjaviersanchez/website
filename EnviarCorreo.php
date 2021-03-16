<?php

    $para      = 'juniorsc750@gmail.com';
    $titulo    = 'DE TU PAGINA PRINCIPAL';
    $mensaje   = 'Hola';

    // Cabeceras
    $cabeceras = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    // Enviamos el mensaje
    mail($para, $titulo, $mensaje, $cabeceras);

?>