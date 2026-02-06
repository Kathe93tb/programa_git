<?php
$conex = mysqli_connect("localhost", "root", "", "formulario", 3306);

if (!$conex) {
    die("No se pudo conectar: " . mysqli_connect_error());
}

echo "Conexion exitosa";
?>