<?php

require_once '../Configuracion/Conexion.php';
require_once '../Modelo/AreasModelo.php';
require_once '../Modelo/RolesModelo.php';
require_once '../Modelo/EmpleadosModelo.php';
require_once '../Modelo/EmpleadoRolModelo.php';

class FuncionesModeloEmpresa extends Conexion
{


    //FUNCIONES CRUD (TABLAS)
    public function obtener_areas_m()
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT id,nombre FROM areas";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_roles_m()
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT id, nombre FROM roles";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_empleados_m()
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM empleados";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_empleado_rol_m()
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT empleado_id, rol_id FROM empleado_rol";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    // FUNCIONES CRUD (INSERTAR)
    public function insertar_areas_m(AreasModelo $areas_m)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $id = $areas_m->obtenerId();
        $nombre = $areas_m->obtenerNombre();
        $sql = "INSERT INTO areas(id,nombre) VALUES ('" . $id . "','" . $nombre . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_roles_m(RolesModelo $roles_m)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $id = $roles_m->obtenerId();
        $nombre = $roles_m->obtenerNombre();
        $sql = "INSERT INTO roles(id, nombre) VALUES ('" . $id . "', '" . $nombre . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_empleados_m(EmpleadosModelo $empleados_m)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $id = $empleados_m->obtenerId();
        $nombre = $empleados_m->obtenerNombre();
        $email = $empleados_m->obtenerEmail();
        $sexo = $empleados_m->obtenerSexo();
        $area_id = $empleados_m->obtenerAreaId();
        $boletin = $empleados_m->obtenerBoletin();
        $descripcion = $empleados_m->obtenerDescripcion();
        $sql = "INSERT INTO empleados(id,nombre,email,sexo,area_id,boletin,descripcion) values ('" . $id . "','" . $nombre . "','" . $email . "','" . $sexo . "','" . $area_id . "','" . $boletin . "','" . $descripcion . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_empleado_rol_m(EmpleadoRolModelo $empleado_rol_m)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $empleado_id = $empleado_rol_m->obtenerEmpleadoId();
        $rol_id = $empleado_rol_m->obtenerRolId();
        $sql = "INSERT INTO empleado_rol(empleado_id, rol_id) VALUES ('" . $empleado_id . "', '" . $rol_id . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    // FUNCIONES CRUD (CONSULTAR)
    public function consultar_areas_id_m($id)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM areas WHERE id = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $areas_m = new AreasModelo($r->id, $r->nombre);
        return $areas_m;
    }

    public function consultar_roles_id_m($id)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM roles WHERE id = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $roles_m = new RolesModelo($r->id, $r->nombre);
        return $roles_m;
    }

    public function consultar_empleados_id_m($id)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM empleados WHERE id = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $empleados_m = new EmpleadosModelo($r->id, $r->nombre, $r->email, $r->sexo, $r->area_id, $r->boletin, $r->descripcion);
        return $empleados_m;
    }

    public function consultar_empleado_rol_id_m($empleado_id)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM empleado_rol WHERE empleado_id = '" . $empleado_id;
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $empleado_rol_m = new EmpleadoRolModelo($r->empleado_id, $r->rol_id);
        return $empleado_rol_m;
    }

    // FUNCIONES CRUD (ACTUALIZAR)
    public function actualizar_areas_id_m(AreasModelo $areas_id_m)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $id = $areas_id_m->obtenerId();
        $nombre = $areas_id_m->obtenerNombre();
        $sql = "UPDATE areas SET nombre='" . $nombre . "'WHERE id='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_roles_id_m(RolesModelo $roles_m)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $id = $roles_m->obtenerId();
        $nombre = $roles_m->obtenerNombre();
        $sql = "UPDATE roles SET nombre='" . $nombre . "' WHERE id='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_empleados_id_m(EmpleadosModelo $empleados_m)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $id = $empleados_m->obtenerId();
        $nombre = $empleados_m->obtenerNombre();
        $email = $empleados_m->obtenerEmail();
        $sexo = $empleados_m->obtenerSexo();
        $area_id = $empleados_m->obtenerAreaId();
        $boletin = $empleados_m->obtenerBoletin();
        $descripcion = $empleados_m->obtenerDescripcion();
        $sql = "UPDATE empleados SET nombre='" . $nombre . "', email='" . $email . "', sexo='" . $sexo . "', area_id='" . $area_id . "', boletin='" . $boletin . "', descripcion='" . $descripcion . "' WHERE id='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_empleado_rol_id_m(EmpleadoRolModelo $empleado_rol_m)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $empleado_id = $empleado_rol_m->obtenerEmpleadoId();
        $rol_id = $empleado_rol_m->obtenerRolId();
        $sql = "UPDATE empleado_rol SET rol_id='" . $rol_id . "' WHERE empleado_id='" . $empleado_id . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    // FUNCIONES CRUD (ELIMINAR)
    public function eliminar_areas_id_m($id)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM areas WHERE id = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function eliminar_roles_id_m($id)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM roles WHERE id = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function eliminar_empleados_id_m($id)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM empleados WHERE id = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function eliminar_empleado_rol_id_m($empleado_id, $rol_id)
    {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM empleado_rol WHERE empleado_id = '" . $empleado_id . "' AND rol_id = '" . $rol_id . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }
}
