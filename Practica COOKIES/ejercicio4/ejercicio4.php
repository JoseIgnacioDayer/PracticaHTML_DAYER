<?php

if(isset($_POST['noticia'])){
    setcookie("noticia", $_POST['noticia'], time() + (60 * 60 * 24 * 90));
    header("Location: ejercicio4.php");
}
if(isset($_COOKIE['noticia'])){
    if($_COOKIE['noticia']== 1){
        header("Location: politica.php");
    }
    if($_COOKIE['noticia']== 2){
        header("Location: economica.php");
    }

    if($_COOKIE['noticia']== 3){
        header("Location: deportiva.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    <h1 align="center">BIENVENIDO AL PERIODICO </h1>
    
    <form action="ejercicio4.php" method="post">
        Noticia política
        <input type="radio" name="noticia" value="1" id="politica"> <br> <br>
        Noticia económica
        <input type="radio" name="noticia" value="2" id="economica"> <br> <br>
        Noticia deportiva
        <input type="radio" name="noticia" value="3" id="deportiva"> <br> <br> 
        <input type="submit" value="Guardar">

    </form>

    
</body>
</html>