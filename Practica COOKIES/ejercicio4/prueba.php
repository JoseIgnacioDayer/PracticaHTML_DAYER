<?php
// Guardar el tipo de titular en la cookie
if (isset($_POST["tipo_titular"])) {
  setcookie("tipo_titular", $_POST["tipo_titular"], time() + 3600);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="radio" name="tipo_titular" value="politica"> Noticia política
    <input type="radio" name="tipo_titular" value="economica"> Noticia económica
    <input type="radio" name="tipo_titular" value="deportiva"> Noticia deportiva
    <input type="submit" value="Guardar">
  </form>
  <?php
  // Obtener el tipo de titular de la cookie
  $tipo_titular = isset($_COOKIE["tipo_titular"]) ? $_COOKIE["tipo_titular"] : "";

  // Mostrar el titular correspondiente
  switch ($tipo_titular) {
    case "politica":
      echo "<h2>Noticia política</h2>";
      echo "<p>En el día de hoy, el presidente anunció un nuevo plan económico.</p>";
      break;
    case "economica":
      echo "<h2>Noticia económica</h2>";
      echo "<p>La bolsa de valores cerró al alza hoy.</p>";
      break;
    case "deportiva":
      echo "<h2>Noticia deportiva</h2>";
      echo "<p>El equipo de fútbol ganó el partido.</p>";
      break;
    default:
      echo "<h2>Noticias</h2>";
      echo "<p>Noticia política</p>";
      echo "<p>Noticia económica</p>";
      echo "<p>Noticia deportiva</p>";
  }
  ?>
  <a href="borrar-cookie.php">Borrar cookie</a>
</body>
</html>