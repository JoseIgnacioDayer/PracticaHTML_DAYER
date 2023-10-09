<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

</head>
<body>
    <form action="" method = "POST">
        <input placeholder="Nombre del amigo" type="text" name ="nombre"> <br> 
        <input placeholder="email" type="text" name ="email"> <br>
        <input placeholder="Enviar" type="submit" name ="enviar">
    </form>
    <?php
    include("correoEj3.php");
    ?>
</body>
</html>

