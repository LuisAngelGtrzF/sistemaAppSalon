<?php

namespace Controllers;

use Model\Producto;
use Model\Categoria;
use Model\Empleado;
use MVC\Router;

class PaginasController {
    public static function index(Router $router) {
        $productos = Producto::ordenar('categoria_id', 'ASC');
   
        $productos_formateados = [];

        foreach($productos as $producto){
            $producto->categoria = Categoria::find($producto->categoria_id);

            if($producto->categoria_id === "1"){
                $productos_formateados['catalogo_uno'][] = $producto;

            }

            if($producto->categoria_id === "2"){
                $productos_formateados['catalogo_dos'][] = $producto;

            }

            /*if($producto->categoria_id === "3"){
                $productos_formateados['catalogo_tres'][] = $producto;

            }

            if($producto->categoria_id === "4"){
                $productos_formateados['catalogo_cuatro'][] = $producto;

            }

            if($producto->categoria_id === "5"){
                $productos_formateados['catalogo_cinco'][] = $producto;
            }*/
        }


        //Obtener el total de cada bloque
        

        //Obtener todos los empleados
        $empleados = Empleado::all();

        $router->render('paginas/index', [
            'titulo' => 'Inicio',
            'productos' => $productos_formateados,
            'empleados' => $empleados
        ]);

    }

    public static function nosotros(Router $router) {

        $router->render('paginas/appsalon', [
            'titulo' => 'Sobre AppSalon'
        ]);

    }

    public static function cita(Router $router) {

        session_start();

        $router->render('paginas/cita', [
            'titulo' => 'Citas',
            'nombre' => $_SESSION['nombre'],
            'apellido' => $_SESSION['apellido'],
            'id' => $_SESSION['id']
        ]);

    }

    public static function servicios(Router $router) {

        $router->render('paginas/servicios', [
            'titulo' => 'Servicios'
        ]);

    }

    public static function productos(Router $router) {

        $productos = Producto::ordenar('categoria_id', 'ASC');
   
        $productos_formateados = [];

        foreach($productos as $producto){
            $producto->categoria = Categoria::find($producto->categoria_id);

            if($producto->categoria_id === "1"){
                $productos_formateados['catalogo_uno'][] = $producto;

            }

            if($producto->categoria_id === "2"){
                $productos_formateados['catalogo_dos'][] = $producto;

            }

            if($producto->categoria_id === "3"){
                $productos_formateados['catalogo_tres'][] = $producto;

            }

            if($producto->categoria_id === "4"){
                $productos_formateados['catalogo_cuatro'][] = $producto;

            }

            if($producto->categoria_id === "5"){
                $productos_formateados['catalogo_cinco'][] = $producto;
            }
        }


        $router->render('paginas/productos', [
            'titulo' => 'Productos',
            'productos' => $productos_formateados
        ]);

    }

    public static function carrito(Router $router) {

        $router->render('paginas/carrito', [
            'titulo' => 'Carrito'
        ]);

    }

    public static function error(Router $router) {
        $router->render('paginas/error', [
            'titulo' => 'Pagina no encontrada :('
        ]);

    }

    }
