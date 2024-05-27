<?php

namespace Model;

class EmpleadoServicio extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'empleadosservicios';
    protected static $columnasDB = ['id','servicioId','empleadoId' ];

    public $id;
    public $empleadoId;
    public $servicioId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->empleadoId = $args['citaId'] ?? '';
        $this->servicioId = $args['servicioId'] ?? '';
    }
}