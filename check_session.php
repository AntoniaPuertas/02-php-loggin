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


/**
 * Como debuggear
 * Instalar la extensión php debug
 * Instalar XDebug:
 * En las instrucciones de la extensión seguir el enlace 'xdebug installation wizard'
 * Visitar php.info copiar (control + a) y pegar todo el código de la página en la ventana de la web del enlace
 * Seguimos las instrucciones para bajar un archivo .dll, dónde colocarlo
 */

 /**
  * En php.ini añadir:
  * [XDebug]
*  zend_extension = xdebug
*  
*  xdebug.mode = debug
*  xdebug.start_with_request = yes
*  xdebug.client_port = 9003
*  xdebug.client_host = "127.0.0.1"
*  
*  ; Opcional: habilitar el log de Xdebug para solucionar problemas
*  xdebug.log = "C:\xampp\php\logs\xdebug.log"
*  
*  ; Opcional: configurar el IDE key para identificar las sesiones de depuración
*  xdebug.idekey = VSCODE
  */

 /**
  * En VSC abrir del menú de la derecha el debug y crear un archivo launch.json
  * 
  */
