<?php

class RolesModelo
{

    protected $id;
    protected $nombre;

    public function __construct($id_rol, $nombre_rol)
    {
        $this->id = $id_rol;
        $this->nombre = $nombre_rol;
    }

    public function obtenerId()
    {
        return $this->id;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }
}
