


<?php
if(isset($_POST['user'])){
    $usuario = $_POST['user'];
    setcookie("usuario", $usuario, time() + (60 * 60 * 24 * 90));
    echo $usuario;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    
    <form action="ejercicio3.php" method="post">
        <input type="text" placeholder="Nombre de Usuario" name="user">      
        <input type="submit" value="Enviar">
        
    </form>
    
</body>
</html>