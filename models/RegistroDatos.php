<?php

namespace Model;

class RegistroDatos extends ActiveRecord {
//Base de datos
protected static $tabla = 'registrodatos';
    protected static $columnasDB = ['id', 'datosId', 'registroId'];

    public $id;
    public $datosId;
    public $registroId;
    

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->datosId = $args['datosId'] ?? '';
        $this->registroId = $args['registroId'] ?? '';
        
    }
}