<?php

namespace Controllers;

use MVC\Router;


class VentaController {

    public static function crear(Router $router) {

        $router->render('venta/crear', [
            'titutlo' => 'Crear venta'
            
            ]);
        }

    }