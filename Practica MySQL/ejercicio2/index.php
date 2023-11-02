<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css" type="text/css">
       
        <title>Capitales del mundo</title>
    </head>
    <body>
        <h2>Capitales del mundo</h2>
        <table align="center">
            <tr>
                <th>Id</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Habitantes</th>
                <th>Superficie</th>
                <th>Tiene metro</th>
            </tr>

<?php
    include("conexion.php");

    $query = "SELECT * FROM capitales";
    $resultados = mysqli_query($cn, $query);

    while ($fila = mysqli_fetch_array($resultados)){
        echo '<tr>';
        echo '<td>' . $fila[0] . '</td>';
        echo '<td>' . $fila[1] . '</td>';
        echo '<td>' . $fila[2] . '</td>';
        echo '<td>' . $fila[3] . '</td>';
        echo '<td>' . $fila[4] . '</td>';
        echo '<td>' . $fila[5] . '</td>';
        echo '</tr>';
    }
    mysqli_close($cn);
?>

        </table>

        <div align="center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarCapital" >
        Agregar Capital
        </button>
        <div class="modal fade" id="agregarCapital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Capital</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="añadir.php" method="post">
                <input type="hidden" value='0' name="verif">
                    <input type="text" placeholder="Capital" name="capital">
                    <br>
                    <input type="text" placeholder="Pais" name="pais">
                    <br>
                    <input type="number" placeholder="Habitantes" name="habitantes">
                    <br>
                    <input type="number" placeholder="Superficie" name="superficie">
                    <br>
                    <input type="number" placeholder="Tiene Metro" name="metro">   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>
            </div>
            </form>
        </div>
        </div>
        


        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrarCapital">
        Borrar Capital
        </button>
        <div class="modal fade" id="borrarCapital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Capital</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="borrar.php" method='post'>
                    <input type="number" placeholder="Id a borrar" name='id'>
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" >Eliminar</button>
            </div>
            </div>
            </form>
        </div>
        </div>


        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modificarCapital">
        Modificar Capital
        </button>
        <div class="modal fade" id="modificarCapital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Capital</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="modificar.php" method="post">
                    <input type="number" placeholder="Id a Modificar" name="iden">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
                </div>
                </form>
                
        </div>
        </div>
        </div>
        


    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>