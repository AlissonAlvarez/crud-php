<?php

require_once '../Modelo/FuncionesModeloEmpresa.php';
require_once '../Modelo/AreasModelo.php';
require_once '../Modelo/RolesModelo.php';
require_once '../Modelo/EmpleadosModelo.php';
require_once '../Modelo/EmpleadoRolModelo.php';


class FuncionesControladorEmpresa extends FuncionesModeloEmpresa
{

    // FUNCIONES CRUD (TABLAS)
    public function obtener_areas_c()
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $datos = $funcion_m->obtener_areas_m();
        require_once '../Vista/html/app/areas/areas.php';
    }

    public function obtener_roles_c()
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $datos = $funcion_m->obtener_roles_m();
        require_once '../Vista/html/app/roles/roles.php';
    }

    public function obtener_empleados_c()
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $datos = $funcion_m->obtener_empleados_m();
        require_once '../Vista/html/app/empleados/empleados.php';
    }

    public function obtener_empleado_rol_c()
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $datos = $funcion_m->obtener_empleado_rol_m();
        require_once '../Vista/html/app/empleado_rol/empleado_rol.php';
    }

    //VISUALIZAR VISTAS CRUD (CONSULTAR)
    public function consultar_areas_id_c($id)
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $datos = $funcion_m->consultar_areas_id_m($id);
        require_once '../Vista/html/app/areas/areas_consultar.php';
    }

    public function consultar_roles_id_c($id)
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $datos = $funcion_m->consultar_roles_id_m($id);
        require_once '../Vista/html/app/roles/roles_consultar.php';
    }

    public function consultar_empleados_id_c($id)
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $datos = $funcion_m->consultar_empleados_id_m($id);
        require_once '../Vista/html/app/empleados/empleados_consultar.php';
    }

    public function consultar_empleado_rol_id_c($id)
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $datos = $funcion_m->consultar_empleado_rol_id_m($id);
        require_once '../Vista/html/app/empleado_rol/empleado_rol_consultar.php';
    }


    // FUNCIONES CRUD (INSERTAR)
    public function insertar_areas_c($id, $nombre)
    {
        $areas_m = new AreasModelo(null, $nombre);
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->insertar_areas_m($areas_m);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron ingresados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=modulo_areas";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=areas_insertar";
            </script>';
        }
    }

    public function insertar_roles_c($id, $nombre)
    {
        $roles_m = new RolesModelo(null, $nombre);
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->insertar_roles_m($roles_m);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron ingresados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=modulo_roles";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=roles_insertar";
            </script>';
        }
    }

    public function insertar_empleados_c($id, $nombre, $email, $sexo, $area_id, $boletin, $descripcion)
    {
        $empleados_m = new EmpleadosModelo(null, $nombre, $email, $sexo, $area_id, $boletin, $descripcion);
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->insertar_empleados_m($empleados_m);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron ingresados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=modulo_empleados";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=empleados_insertar";
            </script>';
        }
    }

    public function insertar_empleado_rol_c($empleado_id, $rol_id)
    {
        $empleado_rol_m = new EmpleadoRolModelo($empleado_id, $rol_id);
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->insertar_empleado_rol_m($empleado_rol_m);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron ingresados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=modulo_empleado_rol";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=empleado_rol_insertar";
            </script>';
        }
    }

    // FUNCIONES CRUD (ACTUALIZAR)
    public function actualizar_areas_id_c($id, $nombre)
    {
        $areas_m = new AreasModelo(NULL, $nombre);
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->actualizar_areas_id_m($areas_m);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron actualizados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=modulo_areas";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=areas_actualizar";
            </script>';
        }
    }

    public function actualizar_roles_id_c($id, $nombre)
    {
        $roles_m = new RolesModelo(NULL, $nombre);
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->actualizar_roles_id_m($roles_m);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron actualizados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=modulo_roles";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=roles_actualizar";
            </script>';
        }
    }

    public function actualizar_empleados_id_c($id, $nombre, $email, $sexo, $area_id, $boletin, $descripcion)
    {
        $empleados_m = new EmpleadosModelo($id, $nombre, $email, $sexo, $area_id, $boletin, $descripcion);
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->actualizar_empleados_id_m($empleados_m);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron actualizados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=modulo_empleados";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=empleados_actualizar";
            </script>';
        }
    }

    public function actualizar_empleado_rol_id_c($empleado_id, $rol_id)
    {
        $empleado_rol_m = new EmpleadoRolModelo($empleado_id, $rol_id);
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->actualizar_empleado_rol_id_m($empleado_rol_m);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron actualizados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=modulo_empleado_rol";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
                window.location = "Controlador.php?accion=empleado_rol_actualizar";
            </script>';
        }
    }

    // FUNCIONES CRUD (ELIMINAR)
    public function eliminar_areas_id_c($id)
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->eliminar_areas_id_m($id);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron eliminados correctamente de la Base de Datos");
                window.location = "Controlador.php?accion=modulo_areas";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron eliminados de la Base de Datos");
                window.location = "Controlador.php?accion=modulo_areas";
            </script>';
        }
    }

    public function eliminar_roles_id_c($id)
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->eliminar_roles_id_m($id);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron eliminados correctamente de la Base de Datos");
                window.location = "Controlador.php?accion=modulo_roles";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron eliminados de la Base de Datos");
                window.location = "Controlador.php?accion=modulo_roles";
            </script>';
        }
    }

    public function eliminar_empleados_id_c($id)
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->eliminar_empleados_id_m($id);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron eliminados correctamente de la Base de Datos");
                window.location = "Controlador.php?accion=modulo_empleados";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron eliminados de la Base de Datos");
                window.location = "Controlador.php?accion=modulo_empleados";
            </script>';
        }
    }

    public function eliminar_empleado_rol_id_c($empleado_id, $rol_id)
    {
        $funcion_m = new FuncionesModeloEmpresa();
        $resultado = $funcion_m->eliminar_empleado_rol_id_m($empleado_id, $rol_id);
        if ($resultado > 0) {
            echo '<script>
                alert("Los datos fueron eliminados correctamente de la Base de Datos");
                window.location = "Controlador.php?accion=modulo_empleado_rol";
            </script>';
        } else {
            echo '<script>
                alert("ERROR: Los datos NO fueron eliminados de la Base de Datos");
                window.location = "Controlador.php?accion=modulo_empleado_rol";
            </script>';
        }
    }
}
