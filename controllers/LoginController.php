<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        $alertas = [];
       
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $auth = new Usuario($_POST);
            $alertas = $auth->validarLogin();
            
           if(empty($alertas)) {
            //Comprobar que exista el usuario
                $usuario = Usuario::where('empleado', $auth->empleado);
                
                if($usuario) {
                    //verificar el password
                    if($usuario->comprobarEmpleadoAndVerificado($auth->rfc)) {
                        //Autenticar al usuario
                        session_start();
                        
                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombreCompleto'] = $usuario->nombre . " " . $usuario->paterno;
                        $_SESSION['empleado'] = $usuario->empleado;
                        $_SESSION['login'] = true;
                        
                        //Redireccionamiento
                        if($usuario->admin === '1') {
                            $_SESSION['admin'] = $usuario->admin ?? null;
                            header('Location: /admin');
                        } else {
                            header('Location: /crear-registro');
                        }
                        
                    }
                    
                } else {
                    Usuario::setAlerta('error','Usuario no encontrado');
                }
           }
        }
        $alertas = Usuario::getAlertas();
        $router->render('auth/login',[
            'alertas' => $alertas
            
        ]);
    }

    public static function logout() {
        session_start();
       $_SESSION = [];
       header('Location: /');
    }

}