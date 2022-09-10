<?php

namespace Model;

class Datos extends ActiveRecord {
//Base de datos
protected static $tabla = 'datos';
    protected static $columnasDB = ['id', 'laboratorio', 'idioma', 'alumnos', 'grupo', 'incidente', 'mensaje', 'atendido', 'fecha_atencion','hora_atencion'];

    public $id;
    public $laboratorio;
    public $idioma;
    public $alumnos;
    public $grupo;
    public $incidente;
    public $mensaje;
    public $atendido;
    public $fecha_atencion;
    public $hora_atencion;


    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->laboratorio = $args['laboratorio'] ?? '';
        $this->idioma = $args['idioma'] ?? '';
        $this->alumnos = $args['alumnos'] ?? 0;
        $this->grupo = $args['grupo'] ?? '';
        $this->incidente = $args['incidente'] ?? 0;
        $this->mensaje = $args['mensaje'] ?? '';
        $this->atendido = $args['atendido'] ?? 0;
        $this->fecha_atencion = $args['fecha_atencion'] ?? '0000-00-00';
        $this->hora_atencion = $args['hora_atencion'] ?? '00:00:00';

    }

    //Mesajes de validación para la creación de un registro

    public function validarNuevoRegistro(){
        if(!$this->laboratorio) {
            self::$alertas['error'][] = "Debes elegir un laboratorio";
        }
    
        if(!$this->idioma) {
            self::$alertas['error'][] = "Debes elegir un idioma";
        }
        if(!$this->grupo) {
            self::$alertas['error'][] = "Debes ingresar un grupo";
        }

        if(!$this->alumnos) {
            self::$alertas['error'][] = "Debes ingresar el número de alumnos atendidos";
        }

        if($this->incidente === null ) {
            self::$alertas['error'][] = "Debes mencionar si tuviste incidentes o no";
        }

        if($this->incidente === 1) {
            if($this->mensaje === '') {
            self::$alertas['error'][] = "No ha descrito su incidente";
            }
        }
        
                
        return self::$alertas;
    }

}