<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: ../gestion/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Login | Lumina</title>
</head>

<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="">
            <div class="input-group">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required />
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required />
            </div>
            <button class="btn-primary" type="submit">Iniciar Sesión</button>
        </form>

        <div class="register-group">
            <a href="#">¿Olvidaste tu contraseña?</a>
            <a href="#">Registrarse</a>
        </div>
    </div>
</body>

</html>