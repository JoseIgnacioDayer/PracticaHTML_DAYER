<?php
session_start();
?>
<html>
    <head>
        <title>Contador de visitas</title>
    </head>
    <body>
        <?php
        if (!isset($_SESSION["contador"])){
        $_SESSION["contador"] = 1;
        }else{
        $_SESSION["contador"]++;
        } ?>
        <a href= "cantVisitas.php">Pagina 1</a> <br>
    </body>
</html>

<?php
    echo "Numero de visitas: " .$_SESSION["contador"];

    if($_SESSION["contador"] == 100){
    
    session_destroy();
    }
?>

