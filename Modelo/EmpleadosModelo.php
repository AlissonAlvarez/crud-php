<?php

class EmpleadosModelo
{

    protected $id;
    protected $nombre;
    protected $email;
    protected $sexo;
    protected $area_id;
    protected $boletin;
    protected $descripcion;

    public function __construct($id_emp, $nombre_emp, $email_emp, $sexo_emp, $area_id_emp, $boletin_emp, $descripcion_emp)
    {
        $this->id = $id_emp;
        $this->nombre = $nombre_emp;
        $this->email = $email_emp;
        $this->sexo = $sexo_emp;
        $this->area_id = $area_id_emp;
        $this->boletin = $boletin_emp;
        $this->descripcion = $descripcion_emp;
    }

    public function obtenerId()
    {
        return $this->id;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function obtenerEmail()
    {
        return $this->email;
    }

    public function obtenerSexo()
    {
        return $this->sexo;
    }

    public function obtenerAreaId()
    {
        return $this->area_id;
    }

    public function obtenerBoletin()
    {
        return $this->boletin;
    }

    public function obtenerDescripcion()
    {
        return $this->descripcion;
    }
}
