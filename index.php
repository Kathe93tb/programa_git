<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro Profesional</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="background-image"></div>

    <div class="container">
        <div class="form-card">
            <h2 class="form-title">Registro</h2>
            
            <form action="register.php" method="POST">
                
                <div class="input-wrapper">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                    <i class="fa-solid fa-user input-icon"></i>
                </div>

                <div class="input-wrapper">
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                    <i class="fa-solid fa-user-tag input-icon"></i>
                </div>

                <div class="gender-wrapper">
                    <label class="gender-title">Género:</label>
                    <div class="radio-group">
                        <label class="radio-container">Masculino
                             <input type="radio" name="genero" value="m" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-container">Femenino
                            <input type="radio" name="genero" value="f" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-container">Otro
                            <input type="radio" name="genero" value="o" required>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <div class="input-wrapper">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <i class="fa-solid fa-envelope input-icon"></i>
                </div>

                <div class="input-wrapper">
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>
                    <i class="fa-solid fa-eye-slash input-icon toggle-password"></i>
                </div>

                <div class="input-wrapper">
                    <input type="tel" id="telefono" name="telefono" placeholder="Número de Teléfono">
                    <i class="fa-solid fa-phone input-icon"></i>
                </div>

                <button type="submit" name="registro" class="btn-submit">Crear Cuenta</button>

                <p class="signin-link">¿Ya tienes una cuenta? <a href="login.html">Iniciar Sesión</a></p>
                 </div>
    
            </form>
        </div>
    </div>

</body>
</html>