<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nueva pag</title>
</head>
<body>
    <h2>Su cookie ha sido eliminada</h2>
    <?php
        setcookie("noticia", '' , time()-1);
        header("Location: ejercicio4.php");
    ?>

</body>
</html>


