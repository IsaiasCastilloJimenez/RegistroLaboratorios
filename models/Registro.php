<?php

namespace Model;

class Registro extends ActiveRecord {
//Base de datos
protected static $tabla = 'registro';
    protected static $columnasDB = ['id', 'fecha', 'hora', 'usuarioId'];

    public $id;
    public $fecha;
    public $hora;
    public $usuarioId;
    

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? '0000-00-00';
        $this->hora = $args['hora'] ?? '00:00:00';
        $this->usuarioId = $args['usuarioId'] ?? '';
        
    }
}