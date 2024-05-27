<?php

namespace Model;

class Servicio extends ActiveRecord {
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'descripcion','imagen', 'precio'];

    public $id;
    public $nombre;
    public $descripcion;
    public $imagen;
    public $precio;
 

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->descripcion) {
            self::$alertas['error'][] = 'La Descripción es Obligatoria';
        }
        if(!$this->imagen) {
            self::$alertas['error'][] = 'La imagen es obligatoria';
        }
        if(!$this->precio) {
            self::$alertas['error'][] = 'El Campo Precio es Obligatorio';
        }
    
        return self::$alertas;
    }
}