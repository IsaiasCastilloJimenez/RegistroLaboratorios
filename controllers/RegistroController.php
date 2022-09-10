<?php

namespace Controllers;

use MVC\Router;
use Model\Datos;
use Model\Registro;
use Model\RegistroDatos;

class RegistroController {
    public static function crear(Router $router) {
        // session_start();
        isAuth();
        $resultado = $_GET['resultado'] ?? null;
        $alertas = Datos::getalertas();
        $entrada = new Datos;
        $RegistroDatos = new RegistroDatos;
        $registro = new Registro;
        $time = time();
        $time = $time - 18000;//Se ajusta la hora a la ciudad de México GMT-5
        //Alertas vacias
        $alertas = [];
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $entrada->sincronizar($_POST);
            
            $alertas = $entrada->validarNuevoRegistro();
            if(empty($alertas)) {
                //Guardar en la base de datos y devuelve el id del registro
                $valorDatosId = $entrada->guardar();
               
                //Almacena RegistroDatos
            }
            
            $registro->fecha = date('Y/m/d', $time);
            $registro->hora = date("H:i:s", $time);
            $registro->usuarioId = $_SESSION['id'];
            //Guarda en la base de datos los valores de tabla registro
            $valorRegistroId = $registro->guardar();

            $RegistroDatos->datosId = $valorDatosId['id'];
            $RegistroDatos->registroId = $valorRegistroId['id'];
            //Guarda en base de datos los valores de la tabla registrodatos
            $RegistroDatos->guardar();
        }
        
        $router->render('registro/crear-registro',[
            'entrada' => $entrada,
            'alertas' => $alertas,
            'resultado' => $resultado      
        ]);
    }

    

    public static function exitoregistro(Router $router) {
        $resultado = $_GET['resultado'] ?? null;
        
        $alertas = Datos::getAlertas();
        
        $router->render('registro/exitoregistro',[
            'alertas' => $alertas,
            'resultado' => $resultado
        ]);
    }
}