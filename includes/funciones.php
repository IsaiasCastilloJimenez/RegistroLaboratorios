<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

//Muestra los mensajes
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch($codigo) {
        case 1:
            $mensaje = 'Registro Creado Correctamente!';
            break;
        case 2:
            $mensaje = 'Actualizado Correctamente!';
            break;
        case 3:
            $mensaje = 'Eliminado Correctamente!';
            break;
        default:
            $mensaje = false;
            break;
    }

    return $mensaje;
}

function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isAdmin() : void {
    if(!isset($_SESSION['admin'])) {
        header('Location: /');
    }
}