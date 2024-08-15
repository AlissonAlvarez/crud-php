<?php

class AreasModelo
{

    protected $id;
    protected $nombre;
    protected $actnumerobimestre;
    protected $actcodasignatura;
    protected $actcodtipoactividades;

    public function __construct($id_area, $nombre_area)
    {
        $this->id = $id_area;
        $this->nombre = $nombre_area;
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
