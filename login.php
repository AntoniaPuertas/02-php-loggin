<?php
session_start();
header('Content-Type: application/json');

// En una aplicación real, estas credenciales deberían estar almacenadas de forma segura
$valid_username = 'usuario';
$valid_password = 'contraseña';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['user'] = $username;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
