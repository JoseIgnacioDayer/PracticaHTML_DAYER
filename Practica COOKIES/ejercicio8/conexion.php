<?php

$link=mysqli_connect("localhost","root");

$mysqli = new mysqli("localhost", "root", "", "prueba");

if ($mysqli->connect_errno) {
    echo "Error al conectar con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "¡Conectado a MySQL!";
}
?>
