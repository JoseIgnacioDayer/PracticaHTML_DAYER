<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="styleEj1.css" >
</head>
<body>
    <form method= "post" >
        <input type="text" placeholder = "name" name ="name" required="">
        <input type="email" placeholder = "email" name ="email" required="">
        <input type="text" placeholder = "asunto" name ="asunto" required="">
        <textarea placeholder = "mensaje"name="msg" ></textarea>
        <input type="submit" name="enviar">
    </form>
    <?php
    include("correo.php");
    ?>
</body>
</html>





