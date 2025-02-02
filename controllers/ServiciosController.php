<?php

namespace Controllers;

use Classes\Paginacion;
use MVC\Router;
use Model\Servicio;
use Intervention\Image\ImageManagerStatic as Image;

class ServiciosController {

    public static function index(Router $router) {
        
        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if(!$pagina_actual || $pagina_actual < 1) {
            header('Location: /admin/servicios?page=1');
        }
        $registros_por_pagina = 5;
        $total = Servicio::total();
        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);

        if($paginacion->total_paginas() < $pagina_actual){
            header('Location: /admin/servicios?page=1');

        }

        $servicios = Servicio::paginar($registros_por_pagina, $paginacion->offset());

        if(!is_admin()) {
            header('Location: /login');
        }


        $router->render('admin/servicios/index', [
            'titulo'=> 'Servicios',
            'servicios' => $servicios,
            'paginacion' => $paginacion->paginacion()
        ]);
}

public static function crear(Router $router) {
    if(!is_admin()) {
        header('Location: /login');
    }

    $alertas = [];
    $servicio = new Servicio;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!is_admin()) {
            header('Location: /login');
        }

        // Leer imagen
        if(!empty($_FILES['imagen']['tmp_name'])) {
            
            $carpeta_imagenes = '../public/img/servicios';

            // Crear la carpeta si no existe
            if(!is_dir($carpeta_imagenes)) {
                mkdir($carpeta_imagenes, 0755, true);
            }

            $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png',80);
            $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp',80);

            $nombre_imagen = md5( uniqid( rand(), true));

            $_POST['imagen'] =$nombre_imagen;
        } 

        $servicio->sincronizar($_POST);


        //validar
        $alertas = $servicio->validar();

        //Guardar el registro
        if(empty($alertas)){

            //Guardar Imagen
            $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . ".png" );
            $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . ".webp" );

            //Guardar en la BD
            $resultado = $servicio->guardar();

            if($resultado) {
                header('Location: /admin/servicios');
            }
        }

    }

    $router ->render('admin/servicios/crear', [
        'titulo' => 'Registrar Servicio',
        'alertas' => $alertas,
        'servicio' => $servicio
    ]);
}

public static function editar(Router $router) {
    if(!is_admin()) {
        header('Location: /login');
    }

    $alertas = [];
    // Validar el ID
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin/servicios');
    }

    //Obtener servicio a Editar
    $servicio = Servicio::find($id);

    if(!$servicio) {
        header('Location: /admin/servicios');
    }

    $servicio->imagen_actual = $servicio->imagen;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if(!is_admin()) {
            header('Location: /login');
        }

        if(!empty($_FILES['imagen']['tmp_name'])) {
            
            $carpeta_imagenes = '../public/img/servicios';

            // Crear la carpeta si no existe
            if(!is_dir($carpeta_imagenes)) {
                mkdir($carpeta_imagenes, 0755, true);
            }

            $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png',80);
            $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp',80);

            $nombre_imagen = md5( uniqid( rand(), true));

            $_POST['imagen'] = $nombre_imagen;
        }  else {
            $_POST['imagen'] = $servicio->$imagen_actual;

        }

        $servicio->sincronizar($_POST);

        $alertas = $servicio->validar();

        if(empty($alertas)) {
            if(isset($nombre_imagen)) {
                $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . ".png" );
                $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . ".webp" );
            }
            $resultado = $servicio->guardar();
            if($resultado) {
                header('Location: /admin/servicios');
            }
        }
    }

    $router ->render('admin/servicios/editar', [
        'titulo' => 'Actualizar Servicio',
        'alertas' => $alertas,
        'servicio' => $servicio
    ]);

}

public static function eliminar() {
    if(!is_admin()) {
        header('Location: /login');
    }


        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $servicio = Servicio::find($id);
            if(isset($servicio)) {
                header('Location: /admin/servicios');
            }
            
            $resultado = $servicio->eliminar();
            if($resultado) {
                header('Location: /admin/servicios');

            }

        }
    }

}