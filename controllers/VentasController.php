<?php

namespace Controllers;

use MVC\Router;

class VentasController {

    public static function index(Router $router) {
        $router->render('admin/ventas/index', [
            'titulo'=> 'Ventas'
        ]);
    }

}