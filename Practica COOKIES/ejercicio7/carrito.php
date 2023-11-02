<?php
session_start();

$carrito = $_POST['producto'];
$_SESSION['producto'] = $carrito;

header("Location: index.php");
?>

