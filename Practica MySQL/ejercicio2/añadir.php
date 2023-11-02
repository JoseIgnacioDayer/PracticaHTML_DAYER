<?php
    include("conexion.php");
    $id = $_POST['verif'];
    
    $capital = $_POST['capital'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = $_POST['metro'];

    if($id == 1){
        $identificador = $_POST['id'];
        $consulta = "UPDATE capitales SET ciudad = '$capital', pais = '$pais', habitantes = '$habitantes', superficie = '$superficie', tieneMetro = '$tieneMetro' WHERE id = '$identificador'";
        ;
    }
    else{
        $consulta = "INSERT INTO capitales (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$capital', '$pais', '$habitantes', '$superficie', '$tieneMetro')";
    }
    
    mysqli_query($cn, $consulta);
    mysqli_close($cn);
    header("Location: index.php");
?>