<?php
//Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
//hasta que cierra sesión o cierra el navegador
//estos datos se guardan en el servidor, son transparentes para el cliente
//hay que utilizar session_start() en todos los archivos dónde quiera utilizar $_SESSION
session_start();

function is_logged_in() {
    return isset($_SESSION['user']);
}

function require_login() {
    if (!is_logged_in()) {
        header('Location: index.php');
        exit();
    }
}
