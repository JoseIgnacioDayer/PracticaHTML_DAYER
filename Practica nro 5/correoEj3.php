<?php
    if(!empty($_POST)){
        $nombre = $_POST["nombre"]; 
        $email = $_POST["email"]; 
        $mensaje = "Hola .$nombre te recomiendo el sitio web [nombre del sitio].";
        mail($email, "Sitio Web", $mensaje);
        ?>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        </head>
        <body>
            <p>Su recomendacion ha sido enviada</p>
        </body>
        </html>
        
        <?php
    }

    else{
        ?>

<html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            
        </head>
        <body>
            <p>Recomendar sitio</p>
        </body>
        </html>


        <?php
    }
    



?>