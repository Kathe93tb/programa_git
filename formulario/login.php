<?php
require_once "connect.php";

if (!empty($_POST['email']) && !empty($_POST['contrasena'])) {

    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM registro WHERE email = ? LIMIT 1";
    $stmt = $conex->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        // Si NO usas password_hash
        if ($contrasena === $usuario['contrasena']) {
            echo "Autenticación correcta";
        } else {
            echo "Contraseña incorrecta";
        }

    } else {
        echo "Usuario no encontrado";
    }

} else {
    echo "Debe completar todos los campos";
}
?>
