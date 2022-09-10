<?php

namespace Model;

class Usuario extends ActiveRecord {
    //Base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'paterno', 'materno', 'empleado', 'rfc', 'admin'];

    public $id;
    public $nombre;
    public $paterno;
    public $materno;
    public $empleado;
    public $rfc;
    public $admin;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->paterno = $args['paterno'] ?? '';
        $this->materno = $args['materno'] ?? '';
        $this->empleado = $args['empleado'] ?? '';
        $this->rfc = $args['rfc'] ?? '';
        $this->admin = $args['admin'] ?? null;
    }

    public function validarLogin() {
        if(!$this->empleado) {
            self::$alertas['error'][] = 'El número de empleado UNAM es obligatorio';
        }
        if(!$this->rfc) {
            self::$alertas['error'][] = 'El RFC sin homoclave es obligatorio';
        }
        return self::$alertas;
    }
    
    public function comprobarEmpleadoAndVerificado($rfc) {
        
        $resultado = $this->rfc === $rfc;
        
        if(!$resultado) {
            self::$alertas['error'][] = 'El RFC es incorrecto, recuerda que es sin homoclave';
        } else {
            return true;
        }
        

        return self::$alertas;
    }
}