<?php
    include("conexion.php");
    $iden = $_POST['iden'];
    $consulta = "SELECT * FROM capitales WHERE id = '$iden'";
    $resultados = mysqli_query($cn, $consulta);
    $resultados = mysqli_fetch_array($resultados);
    if(!empty($resultados)){
        $capital = $resultados['ciudad'];
        $pais = $resultados['pais'];
        $habitantes = $resultados['habitantes'];
        $superficie = $resultados['superficie'];
        $tieneMetro = $resultados['tieneMetro'];
        mysqli_close($cn);
        ?>
        <form action="añadir.php" method='post'>
            <input type="hidden" value="<?php echo "$iden"?>" name="id">
            <input type="hidden" value="1" name="verif">
            <legend>Ciudad</legend>
            <input  type="text" value="<?php echo "$capital"?>" name="capital">
            <br>
            <legend>Pais</legend>
            <input type="text" value="<?php echo "$pais"?>" name="pais">
            <br>
            <legend>Habitantes</legend>
            <input type="number" value="<?php echo "$habitantes"?>" name="habitantes">
            <br>
            <legend>Superficie</legend>
            <input type="number" value="<?php echo "$superficie"?>" name="superficie">
            <br>
            <legend>Metro</legend>
            <input type="number" value="<?php echo "$tieneMetro"?>" name="metro">
            <br>
            <input type="submit" value="Modificar">
        </form>
    <?php
    }
    else{
        echo 'El id no pertenece a nunguna capital';
    }
    

?>



