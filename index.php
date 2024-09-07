<?php
require_once 'check_session.php';
if (is_logged_in()) {
    header('Location: welcome.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="login-container">
        <h2>Inicio de Sesión</h2>
        <form id="loginForm">
            <input type="text" id="username" placeholder="Nombre de usuario" required>
            <input type="password" id="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>

    <script src="js/funciones.js"></script>
</body>
</html>
