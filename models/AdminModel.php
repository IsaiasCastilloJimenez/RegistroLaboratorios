<?php

namespace Model;

class AdminModel extends ActiveRecord {
    // "id": 2,
    // "nombre": "Diego",
    // "paterno": "René",
    // "materno": "Castillo",
    // "empleado": "819540",
    // "rfc": "CAJI780701",
    // "admin": 0,
    // "registro_id": 24,
    // "fecha": "2022-09-07",
    // "hora": "21:09:28",
    // "usuarioId": 2,
    // "registroDatos_id": 18,
    // "datosId": 61,
    // "registroId": 24,
    // "datos_Id": 61,
    // "laboratorio": "D105",
    // "idioma": "FRANCES",
    // "alumnos": 10,
    // "grupo": "600",
    // "incidente": 0,
    // "mensaje": "",
    // "atendido": 0,
    // "fecha_atencion": "0000-00-00",
    // "hora_atencion": "00:00:00"


    protected static $columnasDB = ['id', 'nombre', 'paterno', 'materno', 'empleado', 'rfc', 'admin',
'registro_id','fecha', 'hora', 'usuarioId', 'registroDatos_id', 'datosId', 'registroId', 'datos_Id',
'laboratorio', 'idioma', 'alumnos', 'grupo', 'incidente', 'mensaje', 'atendido', 'fecha_atencion',
'hora_atencion'];

    public $id;
    public $nombre;
    public $paterno;
    public $materno;
    public $empleado;
    public $rfc;
    public $admin;
    public $registro_id;
    public $fecha;
    public $hora;
    public $usuarioId;
    public $registroDatos_id;
    public $datosId;
    public $registroId;
    public $datos_Id;
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
        $this->nombre = $args['nombre'] ?? '';
        $this->paterno = $args['paterno'] ?? '';
        $this->materno = $args['materno'] ?? '';
        $this->empleado = $args['empleado'] ?? '';
        $this->rfc = $args['rfc'] ?? '';
        $this->admin = $args['admin'] ?? null;

        $this->registro_id = $args['registro_id'] ?? null;
        $this->fecha = $args['fecha'] ?? "0000-00-00";
        $this->hora = $args['hora'] ?? "00:00:00";
        $this->usuarioId = $args['usuarioId'] ?? null;
        $this->registroDatos_id = $args['registroDatos_id'] ?? null;
        $this->datosId = $args['datosId'] ?? null;
        $this->registroId = $args['registroId'] ?? null;

        $this->datos_Id = $args['datos_Id'] ?? null;
        $this->laboratorio = $args['laboratorio'] ?? '';
        $this->idioma = $args['idioma'] ?? '';
        $this->alumnos = $args['alumnos'] ?? null;
        $this->grupo = $args['grupo'] ?? '';
        $this->incidente = $args['incidente'] ?? null;
        $this->mensaje = $args['mensaje'] ?? '';
        $this->atendido = $args['atendido'] ?? null;
        $this->fecha_atencion = $args['fecha_atencion'] ?? "0000-00-00";
        $this->hora_atencion = $args['hora_atencion'] ?? "00:00:00";
    }
}