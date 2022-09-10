<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AdminController;
use Controllers\LoginController;
use Controllers\RegistroController;

$router = new Router();

//Iniciar Sesión

$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

//Crear Registro
$router->get('/crear-registro', [RegistroController::class, 'crear']);
$router->post('/crear-registro', [RegistroController::class, 'crear']);

//Página de registro creado correctamente
$router->get('/exitoregistro',[RegistroController::class, 'exitoregistro']);

//pagina de Admin
$router->get('/admin',[AdminController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();