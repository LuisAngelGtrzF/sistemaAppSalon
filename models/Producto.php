<?php

namespace Model;

class Producto extends ActiveRecord {
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id', 'nombre','categoria_id', 'descripcion','imagen', 'precio', 'disponibles'];

    public $id;
    public $nombre;
    public $categoria_id;
    public $descripcion;
    public $imagen;
    public $precio;
    public $disponibles;
    
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->categoria_id = $args['categoria_id'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->disponibles = $args['disponibles'] ?? '';
        
        
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->categoria_id  || !filter_var($this->categoria_id, FILTER_VALIDATE_INT)) {
            self::$alertas['error'][] = 'Elige una Categoría';
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
        if(!$this->disponibles  || !filter_var($this->disponibles, FILTER_VALIDATE_INT)) {
            self::$alertas['error'][] = 'Añade una cantidad de producto Disponibles';
        }
       
    
        return self::$alertas;
    }
}