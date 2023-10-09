<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>

</head>
<body>
    <form action="ej2.php" method= "post" >
        <input type="text" placeholder = "Nombre" name ="name"required=""> <br>
        <input type="email" placeholder = "Email" name ="email"required=""> <br>
        <input type="text" placeholder = "Asunto" name ="asunto"required=""> <br>
        <textarea placeholder = "CONSULTA" name="msg" ></textarea>
        <input type="submit" name="enviar">
    </form>
    <?php
    include("correoEj2.php");
    ?>
</body>
</html>

