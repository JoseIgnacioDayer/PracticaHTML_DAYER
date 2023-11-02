
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
    <h1 align="center">Su carrito de compras</h1>
    <?php
        session_start();
        ?>
        <table align="center">
                <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    
                    
                </tr>
        <?php
        include("conexion.php");
        $cosas = $_SESSION['producto'];
        foreach($cosas as $cosa){
            $query = "SELECT producto, precio FROM catalogo WHERE id = '$cosa'";
            $resultados = mysqli_query($cn, $query);
            while($fila = mysqli_fetch_array($resultados)){
                echo '<tr>';
                echo '<td>' . $fila[0] . '</td>';
                echo '<br>';
                echo '<td> $' . $fila[1] . '</td>';
                echo '</tr>';
            }
        }

        ?>
    </table>
    <a href="index.php">Seguir Comprando</a>
</body>
</html>