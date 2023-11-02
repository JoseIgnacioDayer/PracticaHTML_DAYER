
<?php
if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
}else{
    if (isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ejercicio 1</title>
    <?php
        if(isset($estilo)){
            echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
        }
    ?>
</head>
<body>
    <h1 align="center">Bienvenido</h1>
    <form action="ejercicio1.php" method="post">
        <select name="estilo">
            <option value="claro">Estilo Claro</option>
            <option value="oscuro">Estilo Oscuro</option>
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
