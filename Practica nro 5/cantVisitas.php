<?php
session_start();
?>
<html>
    <head>
        <title> Pagina 2</title>
    </head>
<body>
<a href="cuenta.php"></a>
<?php
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
?>
<br>
<br>
<a href="ej4.php"> Pag Principal</a> <br>
</body>
</html>

<?php
    echo "Numero de visitas: " .$_SESSION["contador"];
    
    if($_SESSION["contador"] == 100){
    
        session_destroy();
    }

?>