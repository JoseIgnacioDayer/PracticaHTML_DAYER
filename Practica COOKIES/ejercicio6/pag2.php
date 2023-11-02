<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "alumnos") or die("Problemas con la conexion");

$query = "SELECT codigo, nombre, codigoCurso FROM alumnos WHERE email='$_REQUEST[email]'";

$registros = mysqli_query($conexion, $query) or die("Problemas en el select:" . mysqli_error($conexion));

if($reg = mysqli_fetch_array($registros)) {
    $_SESSION['usuario'] = $reg['nombre'];
}

?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <a href="pag3.php">Ingresar a la tercera pagina</a>;
</body>

</html>
