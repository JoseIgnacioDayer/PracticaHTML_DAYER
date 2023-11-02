<?php
    if(!isset($_COOKIE)){
        $visitas = 1;
        setcookie("visitas", $visitas, time() + (60 * 60 * 24 * 100));
    }
        

    else{
        $visitas = $_COOKIE['visitas'] + 1;
        
        setcookie("visitas", $visitas, time() + (60 * 60 * 24 * 100));
        
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php 
    if($visitas > 1){
        echo "Esta es tu visita numero" .$_COOKIE['visitas'];
    }
    else{
        echo "Bienvenido, esta es la primera vez que visitas esta pagina";
        echo $visitas;
    }
    ?>
</body>
</html>
