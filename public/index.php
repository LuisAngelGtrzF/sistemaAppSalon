<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\APIController;
use MVC\Router;
use Controllers\AuthController;
use Controllers\DashboardController;
use Controllers\CitasController;
use Controllers\EmpleadosController;
use Controllers\PaginasController;
use Controllers\ProductosController;
use Controllers\CarritoController;
use Controllers\CitaController;
use Controllers\ServiciosController;
use Controllers\VentaController;
use Controllers\VentasController;

$router = new Router();


// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

// Area de administración
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

$router->get('/admin/empleados', [EmpleadosController::class, 'index']);
$router->get('/admin/empleados/crear', [EmpleadosController::class, 'crear']);
$router->post('/admin/empleados/crear', [EmpleadosController::class, 'crear']);
$router->get('/admin/empleados/editar', [EmpleadosController::class, 'editar']);
$router->post('/admin/empleados/editar', [EmpleadosController::class, 'editar']);
$router->post('/admin/empleados/eliminar', [EmpleadosController::class, 'eliminar']);

$router->get('/admin/citas', [CitasController::class, 'index']);
$router->get('/admin/citas/crear', [CitasController::class, 'crear']);

$router->get('/admin/productos', [ProductosController::class, 'index']);
$router->get('/admin/productos/crear', [ProductosController::class, 'crear']);
$router->post('/admin/productos/crear', [ProductosController::class, 'crear']);
$router->get('/admin/productos/editar', [ProductosController::class, 'editar']);
$router->post('/admin/productos/editar', [ProductosController::class, 'editar']);
$router->post('/admin/productos/eliminar', [ProductosController::class, 'eliminar']);

$router->get('/admin/ventas', [VentasController::class, 'crear']);

$router->get('/admin/servicios', [ServiciosController::class, 'index']);
$router->get('/admin/servicios/crear', [ServiciosController::class, 'crear']);
$router->post('/admin/servicios/crear', [ServiciosController::class, 'crear']);
$router->get('/admin/servicios/editar', [ServiciosController::class, 'editar']);
$router->post('/admin/servicios/editar', [ServiciosController::class, 'editar']);
$router->post('/admin/servicios/eliminar', [ServiciosController::class, 'eliminar']);

//Registro de Venta
$router->get('/finalizar-venta',[VentaController::class, 'crear' ]) ;

//API de Cita
$router->get('/api/servicios', [APIController::class, 'index' ]) ;
$router->post('/api/citas', [APIController::class, 'guardar' ]) ;
$router->post('/api/eliminar', [APIController::class, 'eliminar' ]) ;


// Área Pública
$router->get('/', [PaginasController::class, 'index' ]);
$router->get('/appsalon', [PaginasController::class, 'nosotros' ]);
$router->get('/cita', [PaginasController::class, 'cita' ]);
$router->get('/servicios', [PaginasController::class, 'servicios' ]);
$router->get('/productos', [PaginasController::class, 'productos' ]);
$router->get('/carrito', [PaginasController::class, 'carrito']);
$router->get('/404', [PaginasController::class, 'error']);

$router->comprobarRutas();