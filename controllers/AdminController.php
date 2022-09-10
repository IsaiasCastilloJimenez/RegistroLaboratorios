<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;
use Model\AdminModel;

class AdminController {
    public static function index(Router $router) {
        // session_start();
        isAdmin();
        $usuario = Usuario::all();
        
        $datosRegistrados = AdminModel::allAdmin();
        
        $router->render('auth/admin',[
            'usuario' => $usuario,
            'datosRegistrados' => $datosRegistrados
        ]);
    }
}