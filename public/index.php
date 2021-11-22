<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\APIController;
use Controllers\CitaController;
use Controllers\LogginController;
use Controllers\ServicioController;
use MVC\Router;

$router = new Router();

// Iniciar Sesion
$router->get('/', [LogginController::class, 'login']);
$router->post('/', [LogginController::class, 'login']);
$router->get('/logout', [LogginController::class, 'logout']);

// Recuperar Sassword
$router->get('/olvide', [LogginController::class, 'olvide']);
$router->post('/olvide', [LogginController::class, 'olvide']);
$router->get('/recuperar', [LogginController::class, 'recuperar']);
$router->post('/recuperar', [LogginController::class, 'recuperar']);

// Crear Cuenta
$router->get('/crear-cuenta', [LogginController::class, 'crear']);
$router->post('/crear-cuenta', [LogginController::class, 'crear']);

// Confirmar Cuenta
$router->get('/confirmar-cuenta', [LogginController::class, 'confirmar']);
 
$router->get('/mensaje', [LogginController::class, 'mensaje']); 

// AREA PRIVADA
$router->get('/cita', [CitaController::class, 'index']);
$router->get('/admin', [AdminController::class, 'index']);

// API Citas
$router->get('/api/servicios', [APIController::class, 'index']);
$router->post('/api/citas', [APIController::class, 'guardar']);
$router->post('/api/eliminar', [APIController::class, 'eliminar']);

//Crud de servicios
$router->get('/servicios', [ServicioController::class, 'index']);
$router->get('/servicios/crear', [ServicioController::class, 'crear']);
$router->post('/servicios/crear', [ServicioController::class, 'crear']);
$router->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/eliminar', [ServicioController::class, 'eliminar']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();