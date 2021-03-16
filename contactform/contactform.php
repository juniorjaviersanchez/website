
<?php
    
        
        $nombre = $_POST['name'];
        $correo = $_POST['email'];
        $titulo = 'DE TU PAGINA PRINCIPAL:'.$_POST['tema'];
        $mensaje = "Nombre:".$nombre."\r\nCorreo:".$correo."\r\n".$_POST['message'];
        
        $para      = 'juniorsc750@gmail.com';

        // Cabeceras
        $cabeceras = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Enviamos el mensaje
        mail($para, $titulo, $mensaje, $cabeceras);
    
?>