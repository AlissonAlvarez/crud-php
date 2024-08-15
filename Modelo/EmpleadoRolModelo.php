<?php

class EmpleadoRolModelo
{

    protected $empleado_id;
    protected $rol_id;

    public function __construct($empleado_id, $rol_id)
    {
        $this->empleado_id = $empleado_id;
        $this->rol_id = $rol_id;
    }

    public function obtenerEmpleadoId()
    {
        return $this->empleado_id;
    }

    public function obtenerRolId()
    {
        return $this->rol_id;
    }

    public function asignarEmpleadoId($empleado_id)
    {
        $this->empleado_id = $empleado_id;
    }

    public function asignarRolId($rol_id)
    {
        $this->rol_id = $rol_id;
    }
}
