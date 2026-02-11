<?php
require_once "connect.php";

$mensaje = "";

if (
    isset($_POST['registro']) &&
    !empty($_POST['nombre']) &&
    !empty($_POST['apellido']) &&
    isset($_POST['genero']) &&
    !empty($_POST['email']) &&
    !empty($_POST['password'])
) {

    $nombre   = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $genero   = $_POST['genero'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];

    $password_segura = password_hash($password, PASSWORD_DEFAULT);

    $consulta = "INSERT INTO registro
    (nombre, apellido, genero, email, contrasena, telefono)
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conex->prepare($consulta);
    $stmt->bind_param(
        "ssssss",
        $nombre,
        $apellido,
        $genero,
        $email,
        $password_segura,
        $telefono
    );

    if ($stmt->execute()) {
        $mensaje = "Registro guardado correctamente ✅";
    } else {
        $mensaje = "Error: " . $stmt->error;
    }

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensaje = "Faltan datos ❌";
}

echo $mensaje;

