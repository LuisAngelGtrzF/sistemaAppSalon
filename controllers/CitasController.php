<?php

namespace Controllers;

use Model\AdminCita;
use MVC\Router;

class CitasController {

    public static function index(Router $router) {

        $fecha = $_GET['fecha'] ?? date('Y-m-d');
        $fechas = explode('-', $fecha);

         if( !checkdate( $fechas[1], $fechas[2], $fechas[0]) ) {
            header('Location: /404');
        }
        //$fecha = date('Y-m-d');

        // Consultar la base de datos
        $consulta = "SELECT citas.id, citas.hora, CONCAT( usuarios.nombre, ' ', usuarios.apellido) as cliente, ";
        $consulta .= " usuarios.email, usuarios.telefono, servicios.nombre as servicio, servicios.precio  ";
        $consulta .= " FROM citas  ";
        $consulta .= " LEFT OUTER JOIN usuarios ";
        $consulta .= " ON citas.usuarioId=usuarios.id  ";
        $consulta .= " LEFT OUTER JOIN citasServicios ";
        $consulta .= " ON citasServicios.citaId=citas.id ";
        $consulta .= " LEFT OUTER JOIN servicios ";
        $consulta .= " ON servicios.id=citasServicios.servicioId ";
        $consulta .= " WHERE fecha =  '${fecha}' ";

        $citas = AdminCita::SQL($consulta);

        $router->render('admin/citas/index', [
            'titulo' => 'Citas',
            'citas' => $citas,
            'fecha' => $fecha
        ]);
    }

    public static function crear(Router $router) {
        $router->render('admin/citas/crear', [
            'titulo'=> 'Registrar Citas'
        ]);
    }

}