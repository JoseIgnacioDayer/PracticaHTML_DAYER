<?php

    if(!empty($_POST)){
        $destinatario = "admin@gmail.com";
        $asunto = "Consulta " . $_POST["apellido"] . $_POST["nombre"];
        $cuerpo = $_POST["motivo"] . "\n" . $_POST["consulta"];
    
    mail($destinatario,$asunto,$cuerpo);
    ?>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Marche</title>
        </head>
        <body>
            <p>Su consulta ha sido enviada</p>
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
            <p>Complete cada campo</p>
        </body>
        </html>


        <?php
    }

    



?>