<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Supermercado</title>
</head>
<body>
    <h1 align="center">SUPERMERCADO</h1>
    <br>
    <h3 align="center">CATALOGO</h3>

    
    <div align="center">
        <form action="carrito.php" method="post">
            <table align="center">
                <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Seleccionar</th>
                    
                </tr>

            <?php
                include("conexion.php");

                $query = "SELECT * FROM catalogo";
                $resultados = mysqli_query($cn, $query);
               

                while ($fila = mysqli_fetch_array($resultados)){
                    echo '<tr>';
                    echo '<td>' . $fila[0] . '</td>';
                    echo '<td>' . $fila[1] . '</td>';
                    echo '<td> $' . $fila[2] . '</td>';
                    echo '<td><input type="checkbox" name="producto[]" value="'. $fila['id'] . '"></td>';
                    
                    
                    echo '</tr>';
                    
                }
                mysqli_close($cn);
                
            ?>
            
            </table>
    
            <input type="submit" value="Agregar al Carrito">
        </form>
    </div>
    <a href="paginaCarrito.php">Ir al Carrito</a>
    

    
    <hr>
</body>
</html>