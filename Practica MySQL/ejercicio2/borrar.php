<?php
    include('conexion.php');
    $id = $_POST['id'];
    $consulta = "DELETE FROM capitales WHERE id = $id";
    mysqli_query($cn, $consulta);
    mysqli_close($cn);
    header("Location: index.php");
?>
