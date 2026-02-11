<?php
$servidor = "localhost";
$usuario  = "root";
$password = "";
$bd       = "formulario";

$conex = new mysqli($servidor, $usuario, $password, $bd);

if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}
?>
