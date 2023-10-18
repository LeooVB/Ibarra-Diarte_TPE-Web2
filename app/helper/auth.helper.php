<?php
class AuthHelper {

public static function init() {
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
}

public static function login($usuario) {
    AuthHelper::init();
    $_SESSION['id_usuario'] = $usuario->id_usuario;
    $_SESSION['nombre_usuario'] = $usuario->nombre_usuario; 
}

public static function verify() {
    AuthHelper::init();
}

public static function logout() {
    AuthHelper::init();
    session_destroy();
}   

}